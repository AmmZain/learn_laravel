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

Route::get('/', [CatController::class, 'index'])->name('cats.index');
Route::get('/cats/create', [CatController::class, 'create'])->name('cats.create');
Route::delete('/cats/{cat}', [CatController::class, 'destroy'])->name('cats.destroy');
Route::get('/cats/{cat}/edit', [CatController::class, 'edit'])->name('cats.edit');
Route::put('/cats/{cat}', [CatController::class, 'update'])->name('cats.update');
Route::post('/cats', [CatController::class, 'store'])->name('cats.store');
Route::get('/cats/{cat}', [CatController::class, 'show'])->name('cats.show');



    //return view ('course/form');
    //return view ('course/index');
    //return view ('student/index');
    //return view ('student/form');
    //return view('welcome');


