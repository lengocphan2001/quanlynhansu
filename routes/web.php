<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LabourSalaryController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalaryProcessController;
use App\Http\Controllers\WorkingProcessController;
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



Route::get('admin/login', function () {
    return view('admin.auth.login');
})->name('admin.login');
Route::post('admin/login', [AuthController::class, 'postLogin'])->name('admin.postLogin');

Route::get('portal/login', function () {
    return view('user.auth.login');
})->name('user.login');
Route::post('portal/login', [AuthController::class, 'postUserLogin'])->name('user.postLogin');

Route::middleware(['checkUserLogin'])->group(function () {
    Route::get('portal/information', [PortalController::class, 'profile'])->name('portal.infomation');
    Route::get('portal/ot', [PortalController::class, 'ot'])->name('portal.ot');
    Route::get('portal/nghi', [PortalController::class, 'nghi'])->name('portal.nghi');
    Route::get('portal/logout', [AuthController::class, 'userLogout'])->name('portal.logout');
    // Route::get('portal/information', [PortalController::class, 'profile'])->name('portal.infomation');
    Route::get('/', function () {
        return view('user.profile.nghi');
    })->name('dashboard');

    Route::post('portal/nghi/register', [PortalController::class, 'postRegisterLeave'])->name('leave.register');
});

Route::post('admin/login', [AuthController::class, 'postLogin'])->name('admin.postLogin');
Route::middleware(['checkAdminLogin'])->group(function () {
    Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::prefix('organization')->name('organization.')->group(function () {
        Route::resource('departments', DepartmentController::class)->except('destroy');
        Route::resource('positions', PositionController::class)->except('destroy');
        Route::post('departments/delete', [DepartmentController::class, 'destroy'])->name('departments.destroy');
        Route::post('positions/delete', [PositionController::class, 'destroy'])->name('positions.destroy');
        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('chucdanh', [CategoryController::class, 'chucdanh'])->name('chucdanh');
            Route::post('chucdanh/them', [CategoryController::class, 'themChucDanh'])->name('chucdanh.themmoi');
            Route::post('chucdanh/xoa', [CategoryController::class, 'destroy'])->name('chucdanh.xoa');
            Route::get('calamviec', [CategoryController::class, 'calamviec'])->name('calamviec');
            Route::post('calamviec/them', [CategoryController::class, 'themCaLamViec'])->name('calamviec.themmoi');
            Route::post('calamviec/xoa', [CategoryController::class, 'destroyCLV'])->name('calamviec.xoa');
            Route::get('loaihopdong', [CategoryController::class, 'loaihopdong'])->name('loaihopdong');
            Route::post('loaihopdong/them', [CategoryController::class, 'themLoaiHopDong'])->name('loaihopdong.themmoi');
            Route::post('loaihopdong/xoa', [CategoryController::class, 'destroyLHD'])->name('loaihopdong.xoa');
            Route::get('loaichamcong', [CategoryController::class, 'loaichamcong'])->name('loaichamcong');
            Route::post('loaichamcong/them', [CategoryController::class, 'themLoaiChamCong'])->name('loaichamcong.themmoi');
            Route::post('loaichamcong/xoa', [CategoryController::class, 'destroyLCC'])->name('loaichamcong.xoa');
        });
    });
    Route::prefix('labour-salary')->name('labour-salary.')->group(function () {
        Route::get('labours', [LabourSalaryController::class, 'labour'])->name('labour');
        Route::get('on-leave', [LabourSalaryController::class, 'onLeave'])->name('on-leave');
        Route::get('ot', [LabourSalaryController::class, 'timeKeeping'])->name('time-keeping');
        Route::get('total-on-leave', [LabourSalaryController::class, 'totalOnLeave'])->name('total-on-leave');
        Route::get('salarys', [LabourSalaryController::class, 'salary'])->name('salary');
        Route::post('labours', [LabourSalaryController::class, 'postExcel'])->name('import-labour');
        Route::get('total-on-leave/refresh', [LabourSalaryController::class, 'refreshToTalOnLeave'])->name('total-on-leave-refresh');
    });
    Route::resource('employees', EmployeeController::class);
    // Route::resource('employees/contracts', ContractController::class)
    Route::get('employees/contracts/{employee}', [ContractController::class, 'show'])->name('employees.contract');
    Route::resource('employees/salary-process', SalaryProcessController::class);
    Route::resource('employees/working-process', WorkingProcessController::class);
});
