<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepositoryImplement implements UserRepository
{
    private $model;
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function allUser()
    {
        return $this->model->with('book')->paginate(10);
    }

    public function getId($id)
    {
        return $this->model->with('loan')->findOrFail($id);
    }
}
