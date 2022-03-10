<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "tittle" => "Home",
        'active' => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        'active' => 'about',
        "name" => "Mahathirtama Ahmad",
        "email" => "mahathirtama.ahmad@gmail.com",
        "image" => "satu.jpeg"
    ]);
});





Route::get('/post', [PostController::class, 'index']);
Route::get('/categories', function () {
    return view('categories', [
        'tittle' => "Post Categories",
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});



// single post

Route::get('/post/{post:slug}', [PostController::class, 'show']);

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
ROute::post('/logout', [LoginController::class, 'logout']);

ROute::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

// dashboard
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// category
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// // category
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('post', [
//         'tittle' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'post' => $category->posts->load('category', 'author')

//     ]);
// });

// // authors

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('post', [
//         'tittle' => "Post By Author : $author->name",
//         'post' => $author->posts->load('category', 'author')

//     ]);
// });
