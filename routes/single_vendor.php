<?php

namespace App\Http\Controllers;

use Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'Corporate\HomepageController@index')->name('home');








