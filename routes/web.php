<?php
use App\Http\Controllers\AlbunesController;
use App\Http\Controllers\GeneroController;


use Illuminate\Support\Facades\Route;

Route::resource('albunes', AlbunesController::class);
Route::resource('genero', GeneroController::class);
