<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogHomeController;
use App\Http\Controllers\AdminPortalController;
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

// BEGINNING OF WEBSITE ROUTING
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('editintro', [HomeController::class, 'editsiteintro'])->name('editsiteintro');

Route::get('editabout', [HomeController::class, 'editsiteabout'])->name('editsiteabout');

Route::get('editfooter', [HomeController::class, 'editfooter'])->name('editfooter');
//END OF WEBSITE ROUTING



//BEGINNING OF BLOG SITE ROUTING
Route::get('blogindex', [BlogHomeController::class, 'bloghome'])->name('bloghome'); //This route directs you to the Blog Landing Page via the BlogHomeController

Route::get('post', [BlogHomeController::class, 'blogpost'])->name('blogpost');
//END OF BLOG SITE ROUTING




//BEGINNING OF ADMIN PORTAL ROUTING
Route::get('adminindex', [AdminPortalController::class, 'adminindex'])->name('adminhome');


Route::get('posts', [AdminPortalController::class, 'posts'])->name('posts');
//END OF ADMIN PORTAL ROUTING