<?php

use App\Http\Controllers\Auth\EmailConfirmationController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\DataTestsController;
use App\Http\Controllers\StaticPagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register/confirmation/{token}', [EmailConfirmationController::class, 'verify']);


Route::group(["prefix" => "static"], function() {
    Route::get("/", [StaticPagesController::class, "index"])->name("static-pages.index");
   
    Route::get("/questions/create", [StaticPagesController::class, "create"])->name("static-pages.create")->middleware('auth');

    Route::get("/questions/{slug}", [StaticPagesController::class, "search"])->name('tag');
    Route::post("/questions/create", [StaticPagesController::class, "store"])->name("static-pages.store");

});

Route::group(['prefix' => 'test'], function() {
    Route::get('/mails', [DataTestsController::class, 'fakeMail']);
});

