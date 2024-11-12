<?php

use Illuminate\Support\Facades\Route;
/*localhost:8080に表示させる*/
use App\Http\Controllers\PlayerController;
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


/*localhost:8080に移動させる 
　php artisan serve --port=8080
*/

Route::get('/', [PlayerController::class, 'index']);




/*お試し*/
use App\Http\Controllers\TodoController;

// URL「/todos」が「TodoController」の「index」メソッドにマッピングされる
Route::get('/todos', [TodoController::class, 'index']);

Route::get('/players', [PlayerController::class, 'index']);


