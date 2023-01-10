<?php

namespace App\Providers;

use App\Repositories\Book\BookRepository;
use App\Repositories\Book\BookRepositoryImplement;
use App\Repositories\Loan\LoanRepository;
use App\Repositories\Loan\LoanRepositoryImplement;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryImplement;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BookRepository::class, BookRepositoryImplement::class);
        $this->app->bind(UserRepository::class, UserRepositoryImplement::class);
        $this->app->bind(LoanRepository::class, LoanRepositoryImplement::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JsonResource::withoutWrapping();
    }
}
