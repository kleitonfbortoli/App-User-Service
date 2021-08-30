<?php

use App\Http\Controllers\PessoaControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('pessoa', 'App\Http\Controllers\PessoaControler@index');
Route::get('pessoa/{pessoa}', 'App\Http\Controllers\PessoaControler@show');
Route::post('pessoa', 'App\Http\Controllers\PessoaControler@store');
Route::put('pessoa/{pessoa}', 'App\Http\Controllers\PessoaControler@update');
Route::delete('pessoa/{pessoa}', 'App\Http\Controllers\PessoaControler@delete');