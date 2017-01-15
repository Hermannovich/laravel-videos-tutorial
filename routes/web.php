<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if(!config('app.maintenance')){
        return view('welcome');
    }else{
        throw new MaintenanceModeException('1484512892', null, null);
    }
});
