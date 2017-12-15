<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 2:27 PM
 */

namespace App\Modules\Student\Providers;


use App\Modules\Student\Contracts\CUDStudentContract;
use App\Modules\Student\Contracts\RepositoryStudentContract;
use App\Modules\Student\Services\CUDStudent;
use App\Modules\Student\Services\RepositoryStudent;
use Illuminate\Support\ServiceProvider;

class StudentServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CUDStudentContract::class, CUDStudent::class);
        $this->app->bind(RepositoryStudentContract::class, RepositoryStudent::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            CUDStudentContract::class,
            RepositoryStudentContract::class
        ];
    }
}