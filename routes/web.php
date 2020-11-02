<?php

use App\Http\Controllers\StaticPagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(["prefix" => "static"], function() {
    Route::get("/", [StaticPagesController::class, "index"])->name("static-pages.index");
});