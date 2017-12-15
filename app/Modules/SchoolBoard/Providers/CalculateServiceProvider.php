<?php

/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 2:21 PM
 */

namespace App\Modules\SchoolBoard\Providers;

use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesCalculateContract;
use Illuminate\Support\ServiceProvider;


class CalculateServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SchoolBoardGradesCalculateContract::class, function ($app) {
            // Create request
            $request = $app->make('Illuminate\Http\Request');
            // ... get repository
            $studentRepository = $app->make('App\Modules\Student\Contracts\RepositoryStudentContract');
            // ... then we need student ID
            $schoolBoard = $studentRepository->getById($request->id, [], 'schoolBoard');
            // ...correct calculator by SchoolBoard output property
            $class = "App\\Modules\\SchoolBoard\\Services\\" . $schoolBoard->name . "GradesCalculate";
            // ... so we can return right service
            return $app->make($class);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [SchoolBoardGradesCalculateContract::class];
    }
}