<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BugController;
use App\Http\Controllers\CleaningController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\DisinfectionController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\FumigationController;
use App\Http\Controllers\GeneralPestController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ResidentialController;
use App\Http\Controllers\TermiteBaitingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PestController;
use App\Http\Controllers\PestManagementController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::resource('/commercial', CommercialController::class);
    Route::resource('/residential', ResidentialController::class);
    Route::resource('/factory', FactoryController::class);
    Route::resource('/disinfection', DisinfectionController::class);
    Route::resource('/cleaning', CleaningController::class);
    Route::resource('/general_pest', GeneralPestController::class);
    Route::resource('/termite_baiting', TermiteBaitingController::class);
    Route::resource('/fumigation', FumigationController::class);
    Route::resource('/pest', PestController::class);
    Route::resource('/bug', BugController::class);
    Route::resource('/other', OtherController::class);
    Route::resource('/profile', ProfileController::class);
    Route::resource('/information', InformationController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/pestManagement', PestManagementController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/user', ProfileController::class);
    Route::post('user/{user}/change-password', [ProfileController::class, 'changePassword'])->name('user.changePassword');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});