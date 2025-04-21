<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/servicos',[ServicoController::class,'index'])->name('servicos.index');
