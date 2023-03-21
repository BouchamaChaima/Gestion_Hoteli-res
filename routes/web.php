<?php

use App\Http\Controllers\Gestion;
use App\Http\Middleware\Gestion as MiddlewareGestion;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('table', [Gestion::class, 'reserver'])->middleware('Gestion');