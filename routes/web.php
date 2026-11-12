<?php

declare(strict_types=1);

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::redirect('/index', '/')->name('home.index');
Route::get('/case-study', [PortfolioController::class, 'caseStudy'])->name('case-study');
