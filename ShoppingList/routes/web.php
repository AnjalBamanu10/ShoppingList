<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShoppingListController;

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

Route::get('/', [ShoppingListController::class, 'index']);
Route::get('/delete/{id}', [ShoppingListController::class, 'delete']);
Route::get('/edit/{id}', [ShoppingListController::class, 'edit']);
Route::post('/update-list', [ShoppingListController::class, 'updateList'])-> name('updateList');


Route::post('/save-list' , [ShoppingListController::class, 'saveList'])-> name('saveList');
