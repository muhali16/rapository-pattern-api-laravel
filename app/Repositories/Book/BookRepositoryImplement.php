<?php

namespace App\Repositories\Book;

use App\Models\Book;

class BookRepositoryImplement implements BookRepository
{
    private $model;
    public function __construct(Book $user)
    {
        $this->model = $user;
    }

    public function allBook()
    {
        return $this->model->with('user')->paginate(10);
    }

    public function getId($id)
    {
        return $this->model->with('user')->find($id);
    }
}
