<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TestController@homePage');

Route::get('box/{ind}','TestController@viewCard')
    -> name('box');