<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ExperienceController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('home', HomeController::class);
Route::resource('identities', HomeController::class);
Route::resource('formations', FormationController::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('skills', SkillController::class);

// Route::get('/', function () {
//   return view('pages.home');
// });
  // Route::get('/all-identities', [IdentityController::class, 'allIdentities'])->name('identities.all');


Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
