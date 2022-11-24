<?php

use App\Http\Controllers\PostingAppController;
use App\Http\Controllers\Home;
use App\Models\postingApp;
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
Route::get('/',[PostingAppController::class,'forDashboard']);
Route::get('/login',[PostingAppController::class,'forLoginIn']);
Route::get('/sign-up',[PostingAppController::class,'forSignIn'])->name('forSignIn');
Route::post('/sign-up',[Home::class,'signupUser'])->name('signupUser');

Route::get('/app',function(){
    return view('layout.app');
});
;
