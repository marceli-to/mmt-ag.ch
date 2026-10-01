<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', [HomeController::class, 'index'])->name('page.home');
Route::get('/home', [HomeController::class, 'index'])->name('page.home');
Route::get('/team', [AboutController::class, 'team'])->name('page.about_team');
Route::get('/philosophie', [AboutController::class, 'philosophy'])->name('page.about_philosophy');
Route::get('/kontakt', [ContactController::class, 'index'])->name('page.contact');
Route::get('/projekte/{slug}', [ProjectController::class, 'listing'])->name('page.project_listing');
Route::get('/projekt/{slug}', [ProjectController::class, 'detail'])->name('page.project_detail');
