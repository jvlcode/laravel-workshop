<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
   return view("hello");
});
Route::get('/student-form', [StudentController::class,"viewForm"]);
Route::post('/add-student', [StudentController::class,"storeData"]);
Route::get('/student-list', [StudentController::class,"viewList"]);