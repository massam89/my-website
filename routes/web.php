<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\Landing;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;

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

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/owner', [OwnerController::class, 'index'])->name('owner');
Route::post('/owner', [OwnerController::class, 'store'])->name('owner.store');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user', [UserController::class, 'update'])->name('user.update');

Route::get('/facts', [FactsController::class, 'index'])->name('facts');
Route::post('/facts', [FactsController::class, 'update'])->name('facts.update');

Route::resource('/skills', SkillController::class);

Route::resource('/education', EducationController::class);

Route::resource('/experience', ExperienceController::class);

Route::resource('/portfolio', PortfolioController::class);

Route::post('/user/change-password', [ChangePasswordController::class, 'change_password'])->name('users.change.passoword');

Route::get('{any}', function(){
    return redirect('/');
})->where('any', '.*');