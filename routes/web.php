<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//generic routes
Route::get('/', function () {
    return view('content.index');
})->name('home');
Route::get('/about', function () {
    return view('other.about');
})->name('about');

Route::get('/item/{id}', function ($id) {
    return view('content.item' , ['nieuweVar'=>$id]);
})->name('item');


//admin routes
Route::name('admin.')->group(function() {


    Route::get('/admincreate', function () {
        return view('admin.create');
    })->name('create');

    Route::get('/adminedit', function () {
        return view('admin.edit');
    })->name('edit');
    Route::get('/adminindex', function () {
        return view('admin.index');
    })->name('index');




});

