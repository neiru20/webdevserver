<?php

use App\Http\Controllers\StudentActsController;
use App\Models\StudentActs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Authentication Routes dring dapita haha
Route::middleware(['auth'])->group(function () {
    Route::get('/studs', [StudentActsController::class, 'index']);
    Route::get('/register', function () {
    return view('Components.register');});

    Route::post('/create', [StudentActsController::class, 'store'])->name('store');

    //Edit or Update
    Route::get('/editing-page/{id}', function($id){
        $student = StudentActs::findOrFail($id);  // better: findOrFail for error handling
        return view('Components.edit', compact('student'));
    });
    Route::post('/update/{id}', [StudentActsController::class, 'update'])->name('update');


    //Delete
    Route::delete('/editing-page/{studentActs}', [StudentActsController::class, 'destroy'])->name('destroy');


});




//Log in Page
Route::get('/login', function () {
    return view('Components.login');
});
Route::post('/login', [App\Http\Controllers\Authen::class, 'login'])->name('login');

//Logout
Route::post('/logout', [App\Http\Controllers\Authen::class, 'logout'])->name('logout');



//Registration for Users
Route::get('/register', function () {
    return view('Components.registration');
})->name('register');

Route::post('/register', [App\Http\Controllers\Authen::class, 'register'])->name('register.post');