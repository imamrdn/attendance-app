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
Route::middleware(['auth'])->name('attendance')->group(function ()
{
    Route::get('/attendance', [AttendanceController::class, "index"]);
    Route::get('/attendance/create', [AttendanceController::class, "create"]);
    Route::get('/attendance/{id}/edit', [AttendanceController::class, "edit"]);
    Route::get('/attendance/export_excel', [AttendanceController::class, 'export_excel']);

    Route::put('/attendance/{id}', [AttendanceController::class, "update"]);

    Route::delete('/attendance/{id}', [AttendanceController::class, "destroy"]);

    Route::post('/attendance', [AttendanceController::class, "store"]);
});

require __DIR__.'/auth.php';
