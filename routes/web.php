<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
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
    return view('admin.index');
});

Route::prefix('organization')->name('organization.')->group(function () {
    Route::resource('departments', DepartmentController::class);
    Route::resource('positions', PositionController::class);
    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('chucdanh', [CategoryController::class, 'chucdanh'])->name('chucdanh');
        Route::get('calamviec', [CategoryController::class, 'calamviec'])->name('calamviec');
        Route::get('loaihopdong', [CategoryController::class, 'loaihopdong'])->name('loaihopdong');
        Route::get('loaichamcong', [CategoryController::class, 'loaichamcong'])->name('loaichamcong');
    });
});


