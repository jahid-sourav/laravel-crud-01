<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\BlogController;

Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('/add-blog', [ViewController::class, 'addBlog'])->name('add');
Route::get('/manage-blog', [ViewController::class, 'manageBlog'])->name('manage');
Route::post('/new-blog', [BlogController::class, 'newBlog'])->name('new');
Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit');
Route::post('/update-blog', [BlogController::class, 'updateBlog'])->name('update');
Route::get('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('delete');


