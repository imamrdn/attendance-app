<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::resource('attendance', AttendanceController::class)->only(['create']);

Route::get('/attendance', [AttendanceController::class, "index"])
    ->middleware(['auth'])->name('attendance');
Route::get('/attendance/create', [AttendanceController::class, "create"])
    ->middleware(['auth'])->name('attendance');

Route::post('/attendance', [AttendanceController::class, "store"])
    ->middleware(['auth'])->name('attendance');

require __DIR__.'/auth.php';
