<?php

namespace App\Repositories\Loan;

interface LoanRepository
{
    /**
     * Get all data from user table
     *
     * @return mixed
     */
    public function allLoan();
    public function getId($id);
}
