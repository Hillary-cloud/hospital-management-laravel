<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor', [AdminController::class, 'addDoctorView']);
Route::post('/add_doctor', [AdminController::class, 'addDoctor']);
Route::get('/doctor_list', [AdminController::class, 'doctorList']);
Route::get('/edit_doctor/{id}', [AdminController::class, 'editDoctor']);
Route::put('/edit_doctor/{id}', [AdminController::class, 'updateDoctor']);
Route::get('/delete_doctor/{id}', [AdminController::class, 'deleteDoctor']);