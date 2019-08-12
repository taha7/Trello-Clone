<?php
/* ==============================================================================================
    ************************* Authentication Routes *************************
================================================================================================= */
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');


Route::group(['middleware' => 'auth:api'], function () {


    /************************* Auth User Routes *************************/
    Route::post('me', 'AuthController@me');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('logout', 'AuthController@logout');


    /************************* Project Routes *************************/
    Route::get('/projects', 'ProjectsController@index');
});
