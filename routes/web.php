<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/login', [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name(' authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name(' authenticate');


Route::middleware(['auth' ,'checklevel:admin'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    route::resource('user', UserController::class);
    route::resource('category' , CategoryController::class);
    route::resource('item', ItemController::class);
    route::resource('transaction', TransactionController::class);
    route::resource('report', ReportController::class);
});
Route::middleware(['auth' ,'checklevel:cashier'])->group(function () {
    route::resource('transaction', TransactionController::class);
    route::resource('invoice', InvoiceController::class);
});