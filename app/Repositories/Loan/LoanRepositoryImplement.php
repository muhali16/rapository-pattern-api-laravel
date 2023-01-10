<?php

namespace App\Repositories\Loan;

use App\Models\Loans;
use App\Repositories\Loan\LoanRepository;

class LoanRepositoryImplement implements LoanRepository
{
    private $model;
    public function __construct(Loans $loans)
    {
        $this->model = $loans;
    }

    public function allLoan()
    {
        return $this->model->with(['user', 'book'])->paginate(10);
    }

    public function getId($id)
    {
        // TODO: Implement getId() method.
    }
}
