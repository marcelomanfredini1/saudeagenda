<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\AppointmentsController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/painel', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rotas para médicos
    Route::get('/medicos', [DoctorsController::class, 'index'])->name('doctors.index');
    Route::get('/medicos/create', [DoctorsController::class, 'create'])->name('doctors.create');
    Route::post('/medicos', [DoctorsController::class, 'store'])->name('doctors.store');
    Route::get('/medicos/{doctor}', [DoctorsController::class, 'show'])->name('doctors.show');
    Route::get('/medicos/{doctor}/edit', [DoctorsController::class, 'edit'])->name('doctors.edit');
    Route::put('/medicos/{doctor}', [DoctorsController::class, 'update'])->name('doctors.update');
    Route::delete('/medicos/{doctor}', [DoctorsController::class, 'destroy'])->name('doctors.destroy');

    // Rotas para pacientes
    Route::get('/pacientes', [PatientsController::class, 'index'])->name('patients.index');
    Route::get('/pacientes/create', [PatientsController::class, 'create'])->name('patients.create');
    Route::post('/pacientes', [PatientsController::class, 'store'])->name('patients.store');
    Route::get('/pacientes/{patient}', [PatientsController::class, 'show'])->name('patients.show');
    Route::get('/pacientes/{patient}/edit', [PatientsController::class, 'edit'])->name('patients.edit');
    Route::put('/pacientes/{patient}', [PatientsController::class, 'update'])->name('patients.update');
    Route::delete('/pacientes/{patient}', [PatientsController::class, 'destroy'])->name('patients.destroy');

    // Rotas para agendamento de consultas
    Route::get('/consultas', [AppointmentsController::class, 'index'])->name('appointments.index');
    Route::get('/consultas/create', [AppointmentsController::class, 'create'])->name('appointments.create');
    Route::post('/consultas', [AppointmentsController::class, 'store'])->name('appointments.store');
    Route::get('/consultas/{appointment}', [AppointmentsController::class, 'show'])->name('appointments.show');
    Route::get('/consultas/{appointment}/edit', [AppointmentsController::class, 'edit'])->name('appointments.edit');
    Route::put('/consultas/{appointment}', [AppointmentsController::class, 'update'])->name('appointments.update');
    Route::delete('/consultas/{appointment}', [AppointmentsController::class, 'destroy'])->name('appointments.destroy');


});
