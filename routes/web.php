<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Crud\NoticiasController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/calendar', [CalendarController::class, 'calendar'])->name('calendar');
Route::get('/history', [HistoryController::class, 'history'])->name('history');
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/achievements', [AchievementsController::class, 'achievements'])->name('achievements');

Route::get('/noticia/{noticia}', [NewsController::class, 'noticia']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Admin

Route::get('/admin/news', [NoticiasController::class, 'render'])->middleware(['auth'])->name('admin-noticias');
require __DIR__ . '/auth.php';
