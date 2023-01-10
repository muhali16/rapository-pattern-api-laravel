<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'name',
        'publish_year',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'loans', 'book_id', 'user_id');
    }
}
