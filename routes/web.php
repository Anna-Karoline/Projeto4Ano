<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
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
    #admin
    Route::get('/registerAdmin', [AdminController::class, 'register'])->name('register_admin');
    Route::post('/registerAdmin', [AdminController::class, 'store'])->name('store_admin');
    #usuarios
    Route::get('/', [AgendaController::class, 'index'])->name('home');
    Route::get('/perfil', [AgendaController::class, 'perfil'])->name('perfil');
    Route::post('/perfil', [AgendaController::class, 'updateUser'])->name('update_user');
    #horarios
    Route::post('/create', [AgendaController::class, 'store'])->name('store_horario');
    Route::get('/create', [AgendaController::class, 'create'])->name('create_horario');
    Route::get('/horarios', [AgendaController::class, 'lista_horarios'])->name('horarios');
    Route::get('/horariosUser', [AgendaController::class, 'user_horarios'])->name('user_horarios');
    Route::post('/horarios', [AgendaController::class, 'agendar'])->name('agendar_horario');
    Route::delete('/horarios/{id}', [AgendaController::class, 'destroy'])->name('destroy_horario');
    #procedimentos
    Route::get('/createProcedimento', [AgendaController::class, 'createProcedimento'])
    ->name('create_procedimento');
    Route::post('/createProcedimento', [AgendaController::class, 'storeProcedimento'])
    ->name('store_procedimento');
    Route::get('/editarProcedimento/{id}', [AgendaController::class, 'editProcedimento'])
    ->name('editar_procedimento');
    Route::post('/editarProcedimento/{id}', [AgendaController::class, 'updateProcedimento'])
    ->name('update_procedimento');
    Route::get('/procedimentos', [AgendaController::class, 'lista_procedimentos'])
    ->name('procedimentos');
    Route::delete('/procedimentos/{id}', [AgendaController::class, 'destroyProcedimento'])
    ->name('destroy_procedimento');
});

Auth::routes();


