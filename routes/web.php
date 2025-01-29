<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(TodoController::class)->group(function () {
    Route::get('/todos', 'index')->name('todos.index');
    Route::get('/todos/create', 'create')->name('todos.create');
    Route::post('/todos/store', 'store')->name('todos.store');
    Route::get('/todos/{id}', 'show')->name('todos.show');
    Route::get('/todos/edit/{id}', 'edit')->name('todos.edit');
    Route::put('/todos/update/{id}', 'update')->name('todos.update');
    Route::delete('/todos/destroy/{id}', 'destroy')->name('todos.destroy');
});