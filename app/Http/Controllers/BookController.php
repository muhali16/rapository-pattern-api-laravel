<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookCollection;
use App\Http\Resources\BookResource;
use App\Http\Traits\HttpResponse;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Repositories\Book\BookRepository;

class BookController extends Controller
{
    use HttpResponse;

    private $bookRepository;
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = $this->bookRepository->allBook();
        if(count($books) == 0){
            return $this->success(200, 'Data buku kosong.', null);
        }
        return BookResource::collection($books);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($book)
    {
        $data = $this->bookRepository->getId($book);
        if(!$data){
            return $this->error(404, "Data not found.");
        }

        return new BookResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
