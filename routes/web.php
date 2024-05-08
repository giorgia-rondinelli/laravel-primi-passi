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

Route::get('/', function () {


    return view('home',['titolo'=>'Homepage']);
})->name ('home');

Route::get('/info', function(){

    $info= 'Infopage';

    return view('info', compact('info'));
})->name ('info');

Route::get('/welcome', function(){

    $name= 'Emma';
    return view('welcome', compact('name'));
})->name('welcome');
