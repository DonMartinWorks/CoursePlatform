<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Admin Area
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application's admin
| area. These routes are loaded by the RouteServiceProvider within a group
| which applies the "web" and "auth" middlewares, is prefixed with "/admin",
| and has a route name prefix of "admin.". Enjoy building your admin interface!
|
*/

Route::get('/', function () {
    return "ADMIN DASHBOARD";
})->name('dashboard');
