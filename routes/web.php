<?php

use App\Http\Controllers\Landing;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;

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

Route::get('/', [Landing::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/owner', [OwnerController::class, 'index'])->name('owner');
Route::post('/owner', [OwnerController::class, 'store'])->name('owner.store');

Route::get('{any}', function(){
    return redirect('/');
})->where('any', '.*');
