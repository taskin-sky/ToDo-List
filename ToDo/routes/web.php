<?php

use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\todosController; 
use Illuminate\Support\Facades\Route;




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// require __DIR__.'/auth.php';


// home
Route::get('/', [todosController::class, 'index'])->name("todo.home");


// create
Route::get('/create', function () {
    return view('create');
})->name("todo.create");


// edit
Route::get('/edit/{id}',[todosController::class, 'edit'])->name("todo.edit");


//delete 
Route::get('/delete/{id}',[todosController::class,'delete'])->name("todo.delete");


//update 
Route::post('/update',[todosController::class,'update'])->name("todo.update");


// create todo route
Route::post('/create', [todosController::class,'store'])->name("todo.store");




