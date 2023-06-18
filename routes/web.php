<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketTourController;
use App\Http\Controllers\RentalMobilController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;

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
    return view('main/home');
});

Route::get('/login', [UserController::class, 'showLogin']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'showRegister']);
Route::post('/register', [UserController::class, 'register']);


Route::get('/paket-tour', [PaketTourController::class, 'showPaketTour']);
Route::get('/paket-tour/{paket_tour}', [PaketTourController::class, 'showDetailPaketTour']);
Route::get('/admin/paket-tour', [PaketTourController::class, 'showAdminPaketTour']);
Route::get('/admin/paket-tour/tambah', [PaketTourController::class, 'showTambahPaketTour']);
Route::post('/admin/paket-tour/tambah', [PaketTourController::class, 'tambahPaketTour']);
Route::get('/admin/paket-tour/edit/{paket_tour}', [PaketTourController::class, 'showEditPaketTour']);
Route::post('/admin/paket-tour/edit/{paket_tour}', [PaketTourController::class, 'editPaketTour']);
Route::get('/admin/paket-tour/remove/{paket_tour}', [PaketTourController::class, 'removePaketTour']);


Route::get('/rental-mobil', [RentalMobilController::class, 'showRentalMobil']);
Route::get('/rental-mobil/{rental_mobil}', [RentalMobilController::class, 'showDetailRentalMobil']);
Route::get('/admin/rental-mobil', [RentalMobilController::class, 'showAdminRentalMobil']);
Route::get('/admin/rental-mobil/tambah', [RentalMobilController::class, 'showTambahRentalMobil']);
Route::post('/admin/rental-mobil/tambah', [RentalMobilController::class, 'tambahRentalMobil']);
Route::get('/admin/rental-mobil/edit/{rental_mobil}', [RentalMobilController::class, 'showEditRentalMobil']);
Route::post('/admin/rental-mobil/edit/{rental_mobil}', [RentalMobilController::class, 'editRentalMobil']);
Route::get('/admin/rental-mobil/remove/{rental_mobil}', [RentalMobilController::class, 'removeRentalMobil']);


Route::get('/admin/pembayaran', [PembayaranController::class, 'showAdminPembayaran']);


Route::get('/admin', function () {
    return view('admin/dashboard');
});
