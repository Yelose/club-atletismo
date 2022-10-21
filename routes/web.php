<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FullCalendarController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/calendar', [CalendarController::class, 'calendar'])->name('calendar')->middleware(['auth']);
Route::get('/history', [HistoryController::class, 'history'])->name('history');
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/achievements', [AchievementsController::class, 'achievements'])->name('achievements');
Route::get('fullcalendar', [FullCalendarController::class, 'index']);
Route::post('fullcalendar-ajax', [FullCalendarController::class, 'ajax']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


App::setLocale("es");

require __DIR__ . '/auth.php';
