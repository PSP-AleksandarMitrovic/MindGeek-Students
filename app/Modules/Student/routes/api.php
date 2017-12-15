<?php

Route::group(['prefix' => '/v1/students', 'namespace' => 'App\Modules\Student\Controllers'], function(){

    Route::get('/{id}/calculate_grades', 'StudentGradeController@calculate')->where('id', '[0-9]+');

});