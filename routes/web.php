<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\OrdernowController;


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

// FRONTEND
Route::get('/', [WelcomeController::class, 'index'])->name('frontend.layouts.app');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('frontend.mainpage.home');
Route::get('/home/order', [App\Http\Controllers\OrdernowController::class, 'index'])->name('frontend.pages.index');
Route::post('/home/order', [OrdernowController::class, 'postSave']);
Route::get('/home/order/print_order', [App\Http\Controllers\OrdernowController::class, 'tampil'])->name('frontend.pages.orderpdf');
Route::get('/home/take', [App\Http\Controllers\TakeController::class, 'index'])->name('frontend.pages.take');
Route::get('/home/take/laundry', [App\Http\Controllers\TakeController::class, 'laundry'])->name('frontend.pages.laundry');
Route::get('/home/order/cari',[OrdernowController::class, 'cari'])->name('cari');

Auth::routes(['register' => true]);


// BACKEND
Route::group(['prefix' => 'dashboard', 'middleware' =>['auth', 'admin']], function () {
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('backend.dashboard.index');
/* PACKAGE ROUTE */
Route::get('/package', [PackageController::class, 'index'])->name('backend.package.index');
Route::get('/package/create', [PackageController::class, 'create'])->name('backend.package.create');
Route::post('/package/insertdata', [PackageController::class, 'postSave']);
Route::get('/package/edit/{id}', [PackageController::class, 'edit'])->name('backend.package.edit');
Route::post('/package/update/{id}', [PackageController::class, 'update']);
Route::get('/package/delete/{id}', [PackageController::class, 'delete']);
Route::get('/package/detail/{id}', [PackageController::class, 'detail'])->name('backend.package.post');
/* DATA KONSUMEN ROUTE */
Route::get('/user', [UsersController::class, 'index'])->name('backend.users.index');
Route::get('/user/create', [UsersController::class, 'create'])->name('backend.users.create');
Route::post('/user/insertdata', [UsersController::class, 'postSave']);
Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('backend.users.edit');
Route::post('/user/update/{id}', [UsersController::class, 'update']);
Route::get('/user/delete/{id}', [UsersController::class, 'delete']);
Route::get('/user/detail/{id}', [UsersController::class, 'detail'])->name('backend.users.post');
/* ORDER LAUNDRY ROUTE */
Route::get('/order', [OrderController::class, 'index'])->name('backend.order.index');
Route::get('/order/create', [OrderController::class, 'create'])->name('backend.order.create');
Route::post('/order/insertdata', [OrderController::class, 'postSave']);
Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('backend.order.edit');
Route::post('/order/update/{id}', [OrderController::class, 'update']);
Route::get('/order/delete/{id}', [OrderController::class, 'delete']);
Route::get('/order/detail/{id}', [OrderController::class, 'detail'])->name('backend.order.post');
/* LAPORAN ROUTE */
Route::get('/report', [ReportController::class, 'index'])->name('backend.report.index');
Route::get('/report/detail/{id}', [ReportController::class, 'detail'])->name('backend.report.post');
Route::get('/report/edit/{id}', [ReportController::class, 'edit'])->name('backend.report.edit');
Route::post('/report/update/{id}', [ReportController::class, 'update']);
Route::get('/report/delete/{id}', [ReportController::class, 'delete']);
// EXPORT EXCEL
Route::get('/exportexcel', [ReportController::class, 'exportexcel'])->name('exportexcel');
/* ADMIN ROUTE */
Route::get('/admin', [AdminController::class, 'index'])->name('backend.admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('backend.admin.create');
Route::post('/admin/insertdata', [AdminController::class, 'postSave']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('backend.admin.edit');
Route::post('/admin/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/delete/{id}', [AdminController::class, 'delete']);
Route::get('/admin/detail/{id}', [AdminController::class, 'detail'])->name('backend.admin.detail');
});