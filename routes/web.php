<?php

use App\Http\Controllers\postcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [postcontroller::class , 'index'])->name('posts.index');
Route::get('/posts/create' ,[postcontroller::class,'create'])->name('posts.create');
Route::get('/posts/{post}', [postcontroller::class,'show'])->name('posts.show');
Route::post('/posts', [postcontroller::class,'store'])->name('posts.store');
Route::get('/posts/{post}/edit',[postcontroller::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}', [postcontroller::class,'update'])->name('posts.update');
Route::delete('/posts/{post}' ,[postcontroller::class,'destroy'])->name('posts.destroy');

