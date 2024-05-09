<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [CatController::class, 'index']);
Route::delete('/cats/{cat}', [CatController::class, 'destroy'])->name('cats.destroy');
    //return view ('course/form');
    //return view ('course/index');
    //return view ('student/index');
    //return view ('student/form');
    //return view('welcome');


