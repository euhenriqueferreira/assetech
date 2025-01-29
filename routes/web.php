<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ThanksController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('pages.home');

Route::get('/sobre-nos', CompanyController::class)->name('pages.company');

Route::get('/contato', ContactController::class)->name('pages.contact');
Route::post('/contato', [ContactController::class, 'handleSubmitContactForm']);

Route::get('/servicos', ServicesController::class)->name('pages.services');

Route::get('/obrigado', ThanksController::class)->name('pages.thanks');
