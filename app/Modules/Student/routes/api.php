<?php

Route::group(['prefix' => '/v1/students'], function(){

    Route::get('/{id}/calculate_grades', 'StudentGradeController@calculate');

});