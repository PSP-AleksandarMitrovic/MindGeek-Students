<?php

Route::group(['prefix' => '/v1/students', 'namespace' => 'App\Modules\Student\Controllers'], function(){

    Route::get('/{id}/grades_report', 'StudentGradeController@sendReport')->where('id', '[0-9]+');

});