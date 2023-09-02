<?php

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\ManageLabInventoryController;
use App\Http\Controllers\ManageLoansController;

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

Route::get('/a', function () {
    return view('main');
});

Route::get('/', function () {
    return view('landing_page');
});

// Route::get('/dashboard', function() {
//     return view('dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/Inventaris', [InventarisController::class, 'index']);

Route::get('beranda', [BerandaController::class, 'index']);

Route::get('/manage_lab_inventory', [ManageLabInventoryController::class, 'index']);

Route::get('/manage_loans', [ManageLoansController::class, 'index']);


