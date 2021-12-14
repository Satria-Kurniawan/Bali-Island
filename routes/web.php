<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => [
    'auth:sanctum',
    'verified',
    'accessrole'
]], function () {
    Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori');
    Route::post('/kategori', [CategoryController::class, 'store'])->name('storeCategory');
    Route::get('/delete-kategori/{id}', [CategoryController::class, 'destroy'])->name('destroyCategory');
    Route::get('/edit-kategori/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::post('/update-kategori/{id}', [CategoryController::class, 'update'])->name('updateCategory');

    Route::get('/postingan', [PostController::class, 'index'])->name('postingan');
    Route::get('/tambah-postingan', [PostController::class, 'create'])->name('createPost');
    Route::post('/postingan', [PostController::class, 'store'])->name('storePost');
    Route::get('/delete-postingan/{id}', [PostController::class, 'destroy'])->name('destroyPost');
    Route::get('/edit-postingan/{id}', [PostController::class, 'edit'])->name('editPost');
    Route::post('/update-postingan/{id}', [PostController::class, 'update'])->name('updatePost');

    Route::get('/pencarian-data', [PostController::class, 'searchDataPost'])->name('searchDataPost');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/galeri', [WelcomeController::class, 'galeri'])->name('galeri');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('kontak');
Route::get('/overview', [WelcomeController::class, 'overview'])->name('overview');
Route::get('/about-me', [WelcomeController::class, 'aboutMe'])->name('aboutMe');

Route::get('/konten-postingan/{id}', [WelcomeController::class, 'show'])->name('konten');
Route::get('/pencarian', [WelcomeController::class, 'searchData'])->name('searchData');
