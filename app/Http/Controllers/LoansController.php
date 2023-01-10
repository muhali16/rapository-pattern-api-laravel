<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoanCollection;
use App\Models\Loans;
use App\Repositories\Loan\LoanRepository;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    private $loanRepository;

    public function __construct(LoanRepository $loanRepository)
    {
        $this->loanRepository = $loanRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new LoanCollection($this->loanRepository->allLoan());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function show(Loans $loans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loans $loans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loans $loans)
    {
        //
    }
}
