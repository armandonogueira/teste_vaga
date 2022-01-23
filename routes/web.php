<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\DoctorController;
use App\Http\Controllers\App\PatientController;
use App\Http\Controllers\App\AddressController;
use App\Http\Controllers\App\SpecialtyController;
use App\Http\Controllers\App\MaController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/get-cep', [AddressController::class, 'get_cep'])->name('get-cep');

// Router Doctor
Route::get('/doctor-list', [DoctorController::class, 'list'])->name('doctor-list');
Route::get('/doctor-create', [DoctorController::class, 'create'])->name('doctor-create');
Route::post('/doctor-save', [DoctorController::class, 'save'])->name('doctor-save');

// Route::get('/patient-edit/{$i?}', [PatientController::class, 'edit'])->name('patient-edit');

// Route Patient
Route::get('/patient-list', [PatientController::class, 'list'])->name('patient-list');
Route::get('/patient-create', [PatientController::class, 'create'])->name('patient-create');
Route::post('/patient-save', [PatientController::class, 'save'])->name('patient-save');

// Route specialty
Route::get('/specialty-list', [SpecialtyController::class, 'list'])->name('specialty-list');
Route::get('/specialty-create', [SpecialtyController::class, 'create'])->name('specialty-create');
Route::post('/specialty-save', [SpecialtyController::class, 'save'])->name('specialty-save');

// Route medical appointment
Route::get('/ma-list', [MaController::class, 'list'])->name('ma-list');
Route::get('/ma-create', [MaController::class, 'create'])->name('ma-create');
Route::post('/ma-save', [MaController::class, 'save'])->name('ma-save');


Auth::routes();
