<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     $response = Http::get('https://fakestoreapi.com/products')->json();
//     //nella variabile response fai una chiamata di tipo get a questo URL e trasforma il risultato in json
//     return $response;
// });

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/show/{id}', [PageController::class, 'show'])->name('show');

