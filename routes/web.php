<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/quemsomos', function () {
    return view('quemsomos');
})->name('quemsomos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::post('/enviar', [ContatoController::class, 'enviar']);
