<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('blogindex', [HomeController::class, 'bloghome'])->name('bloghome');

Route::get('post', [HomeController::class, 'blogpost'])->name('blogpost');

Route::get('adminindex', [HomeController::class, 'adminindex'])->name('adminhome');

Route::get('editintro', [HomeController::class, 'editsiteintro'])->name('editsiteintro');
