<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TugasController;
use App\Models\Category;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});

// Request
Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name('proses-form-guest');

// Validation
Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

// Tugas
Route::get('/tugas', [TugasController::class, 'tugas']);
Route::post('/proses-tugas', [TugasController::class, 'proses']);

Route::get('/article', function () {
    return view('article');
});

Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get("/categories", function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get("/categories/{category:slug}", function(Category $category){
    return view('category', [
        'title' => $category->name,
        'articles' => $category->articles,
        'category' => $category->name
    ]);
});

Route::get("/authors/{author:username}", function(User $author) {
    return view('article', [
        'title' => 'User Articles',
        'articles' => $author->articles
    ]);
});