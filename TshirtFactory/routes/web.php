<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TshirtCompController;

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
    return view('welcome');
});

Route::get('/', [TshirtCompController::class, 'index']);
Route::get('/delete/{id}', [TshirtCompController::class, 'deleteData']);
Route::get('/edit/{id}', [TshirtCompController::class, 'editData']);
Route::post('/edit', [TshirtCompController::class, 'updateData'])-> name('updateData');

Route::post('/save-data' , [TshirtCompController::class, 'saveData'])-> name('saveData');
