<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalaryProcessController;
use App\Http\Controllers\WorkingProcessController;
use App\Models\Contract;
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
    return view('user.profile.nghi');
})->name('dashboard');

Route::prefix('organization')->name('organization.')->group(function () {
    Route::resource('departments', DepartmentController::class)->except('destroy');
    Route::post('departments/delete', [DepartmentController::class, 'destroy'])->name('departments.destroy');
    Route::resource('positions', PositionController::class);
    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('chucdanh', [CategoryController::class, 'chucdanh'])->name('chucdanh');
        Route::post('chucdanh/them', [CategoryController::class, 'themChucDanh'])->name('chucdanh.themmoi');
        Route::post('chucdanh/xoa', [CategoryController::class, 'destroy'])->name('chucdanh.xoa');
        Route::get('calamviec', [CategoryController::class, 'calamviec'])->name('calamviec');
        Route::get('loaihopdong', [CategoryController::class, 'loaihopdong'])->name('loaihopdong');
        Route::get('loaichamcong', [CategoryController::class, 'loaichamcong'])->name('loaichamcong');
    });
});
Route::resource('employees', EmployeeController::class);
// Route::resource('employees/contracts', ContractController::class);

Route::get('employees/contracts/{employee}', [ContractController::class, 'show'])->name('employees.contract');
Route::resource('employees/salary-process', SalaryProcessController::class);
Route::resource('employees/working-process', WorkingProcessController::class);




