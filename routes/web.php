<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ExperienceController;


Route::get('/', function () {
  return view('pages.home');
});

Route::resource('home', HomeController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('formation', FormationController::class);
Route::resource('identity', IdentityController::class);
Route::resource('skill', SkillController::class);

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
