<?php

use App\Http\Controllers\Instructor\Sections\CourseController as Course;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Instructor Area
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application's instructor
| area. These routes are loaded by the RouteServiceProvider within a group
| which applies the "web" and "auth" middlewares, is prefixed with "/instructor",
| and has a route name prefix of "instructor.". Enjoy building your instructor interface!
|
*/

// Route::redirect('/', '/instructor/courses')->name('home');
Route::get('/', function () {
    return redirect()->route('instructor.courses.index');
})->name('home');

/** ----- Course Section ----- */
Route::resource('/courses', Course::class);
