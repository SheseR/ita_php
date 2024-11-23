<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\CategoryPostsController;

Route::get('/', [HomeController::class, 'index'])
    ->name('tasks.index');

Route::get('tasks/index', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::get('tasks/create', [TaskController::class, 'create'])
    ->name('tasks.create');

Route::post('tasks/store', [TaskController::class, 'store'])
    ->name('tasks.store');

Route::delete('tasks/{task}', [TaskController::class, 'destroy'])
    ->name('tasks.destroy');

Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])
    ->name('tasks.edit');

Route::put('tasks/{task}/update', [TaskController::class, 'update'])
    ->name('tasks.update');

//Route::put('tasks/{task}/show', [TaskController::class, 'show'])
//    ->name('tasks.show');

Route::resource('posts', PostsController::class);

Route::get('categories', [CategoriesController::class, 'index']);
Route::get('categories/{category}/posts', [CategoryPostsController::class, 'index']);

