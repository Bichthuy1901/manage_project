<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected static $repositories = [
        'student' => [
            \App\Constracts\StudentRepository::class,
            \App\Repositories\StudentRepositoryEloquent::class,
        ],
        'class' => [
            \App\Constracts\ClassRepository::class,
            \App\Repositories\ClassRepositoryEloquent::class,
        ],
         'course' => [
            \App\Constracts\CourseRepository::class,
            \App\Repositories\CourseRepositoryEloquent::class,
        ],
        'branch' => [
            \App\Constracts\BranchRepository::class,
            \App\Repositories\BranchRepositoryEloquent::class,
        ],
        'media' => [
            \App\Constracts\MediaRepository::class,
            \App\Repositories\MediaRepositoryEloquent::class,
        ],
        'trainer' => [
            \App\Constracts\TrainerRepository::class,
            \App\Repositories\TrainerRepositoryEloquent::class,
        ],
    ];
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::$repositories as $repository) {
            $this->app->singleton(
                $repository[0],
                $repository[1]
            );
        }
    }
}
