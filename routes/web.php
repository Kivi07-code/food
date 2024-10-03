<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menus;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu', [
        'menu' => Menus::all()
    ]);
});

Route::get('/job/create', function () {
    return view('jobs.create');

});

Route::get('/menu/{id}', function ($id) {
    $menus = Menus::find($id);

    return view('menus', ['menus' => $menus]);
});

Route::post('/jobs', function() {
    //validation

});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});

// Auth

Route::get('/register',[RegisteredUserController::class,'create']);
Route::get('/register',[RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::get('/login',[SessionController::class,'store']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});