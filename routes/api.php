<?php

Route::get('/', 'App\Http\Controllers\PessoaControler@index');
Route::get('/{pessoa}', 'App\Http\Controllers\PessoaControler@show');
Route::post('/', 'App\Http\Controllers\PessoaControler@store');
Route::put('/{pessoa}', 'App\Http\Controllers\PessoaControler@update');
Route::delete('/{pessoa}', 'App\Http\Controllers\PessoaControler@delete');
