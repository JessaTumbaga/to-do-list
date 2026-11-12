<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});

// READ (Ipakita lahat ng tasks)
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// CREATE (Form para sa bagong task at pag-save)
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// UPDATE (Form para i-edit at pag-save ng binago)
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

// DELETE (Burahin ang task)
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');