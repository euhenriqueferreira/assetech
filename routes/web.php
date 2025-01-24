<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('pages.home');
Route::get('/sobre-nos', CompanyController::class)->name('pages.company');
