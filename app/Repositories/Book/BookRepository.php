<?php

namespace App\Repositories\Book;

interface BookRepository
{
    /**
     * Get all data from user table
     *
     * @return mixed
     */
    public function allBook();

    public function getId($id);
}
