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
use Illuminate\Support\Facades\Artisan;

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

Route::get('visibility', [VisibilityController::class, 'index'])->name('visibility.index');
Route::post('visibility', [VisibilityController::class, 'update'])->name('visibility.update');

Route::resource('/skills', SkillController::class);

Route::resource('/education', EducationController::class);

Route::resource('/experience', ExperienceController::class);

Route::resource('/portfolio', PortfolioController::class);

Route::resource('testimonial', TestimonialController::class);

Route::post('/user/change-password', [ChangePasswordController::class, 'change_password'])->name('users.change.passoword');

Route::post('contactForm', [FormController::class, 'getContactForm'])->name('get-contact-form');
Route::get('messages', [MessageController::class, 'index'])->name('messages.index');

// Route::get('/clear', function() {
//     Artisan::call('cache:clear');
//     return 'ok';
//     // return view('cacheClear');

// });

Route::get('{any}', function(){
    return redirect('/');
})->where('any', '.*');