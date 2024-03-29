<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\Specialty;
use App\Http\Controllers\SpecialtyController;

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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/specialties', [SpecialtyController::class, 'index'])->name('specialties');
    Route::get('/specialties/create', [SpecialtyController::class, 'create'])->name('create');
    Route::get('/specialties/{specialty}/edit', [SpecialtyController::class, 'edit'])->name('edit');
    Route::post('/specialties', [SpecialtyController::class, 'store'])->name('specialties');
    Route::put('/specialties/{specialty}', [SpecialtyController::class, 'update'])->name('put');
    Route::delete('/specialties/{specialty}', [SpecialtyController::class, 'destroy'])->name('specialties');

    //   Route::post('/specialties', 'SpecialtyController@store');

    //doctors
    Route::resource('doctors', DoctorController::class);
});
