<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/', [AgendaController::class, 'index'])->name('home');
    Route::get('/perfil', [AgendaController::class, 'perfil'])->name('perfil');
    Route::post('/create', [AgendaController::class, 'store'])->name('store_horario');
    Route::get('/create', [AgendaController::class, 'create'])->name('create_horario');
    Route::get('/horarios', [AgendaController::class, 'lista_horarios'])->name('horarios');
    Route::post('/horarios', [AgendaController::class, 'agendar'])->name('agendar_horario');
    Route::delete('/horarios/{id}', [AgendaController::class, 'destroy'])->name('destroy_horario');
});

Auth::routes();


