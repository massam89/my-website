<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Landing;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisibilityController;
use Litespeed\LSCache\LSCache;
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

Auth::routes(['verify' => true, 'register' => false]);

Route::redirect('/', '/en');
Route::get('/{lang}', [Landing::class, 'index'])->middleware('lscache:max-age=300;public')->name('index');

Route::get('/{lang}/home', [HomeController::class, 'index'])->name('home');

Route::get('/{lang}/owner', [OwnerController::class, 'index'])->name('owner');
Route::put('/{lang}/owner', [OwnerController::class, 'store'])->name('owner.store');

Route::get('/{lang}/user', [UserController::class, 'index'])->name('user');
Route::post('/{lang}/user', [UserController::class, 'update'])->name('user.update');

Route::get('/{lang}/facts', [FactsController::class, 'index'])->name('facts');
Route::post('/{lang}/facts', [FactsController::class, 'update'])->name('facts.update');

Route::get('/{lang}/visibility', [VisibilityController::class, 'index'])->name('visibility.index');
Route::post('/{lang}/visibility', [VisibilityController::class, 'update'])->name('visibility.update');

Route::resource('/{lang}/skills', SkillController::class);

Route::resource('/{lang}/education', EducationController::class);

Route::resource('/{lang}/experience', ExperienceController::class);

Route::resource('/{lang}/portfolio', PortfolioController::class);

Route::resource('/{lang}/testimonial', TestimonialController::class);

Route::post('/{lang}/user/change-password', [ChangePasswordController::class, 'change_password'])->name('users.change.passoword');

Route::post('/contactForm', [FormController::class, 'getContactForm'])->name('get-contact-form');
Route::get('/{lang}/messages', [MessageController::class, 'index'])->name('messages.index');

Route::get('/cashe/clear', function() {
    LSCache::purgeAll();
    return view('cacheClear');
});

Route::get('{any}', function(){
    return redirect('/');
})->where('any', '.*');