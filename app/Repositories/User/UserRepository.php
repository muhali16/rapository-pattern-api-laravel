<?php

namespace App\Repositories\User;

interface UserRepository
{
    /**
     * Get all data from user table
     *
     * @return mixed
     */
    public function allUser();
    public function getId($id);
}
