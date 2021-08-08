<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['verified']], function() {
    Route::get('/dashboard/analytics', [\App\Http\Controllers\Admin\DashboardController::class, 'analytics'])->name('dashboard.analytics');
    Route::get('/dashboard/ecommerce', [\App\Http\Controllers\Admin\DashboardController::class, 'ecommerce'])->name('dashboard.ecommerce');

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'isAdmin'], function() {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
        Route::get('permissions/bulk-create', [\App\Http\Controllers\Admin\PermissionController::class, 'bulkCreate'])->name('permissions.bulk-create');
        Route::post('permissions/bulk-store', [\App\Http\Controllers\Admin\PermissionController::class, 'bulkStore'])->name('permissions.bulk-store');
        Route::get('permissions/bulk-delete', [\App\Http\Controllers\Admin\PermissionController::class, 'bulkDelete'])->name('permissions.bulk-delete');
        Route::delete('permissions/bulk-destroy', [\App\Http\Controllers\Admin\PermissionController::class, 'bulkDestroy'])->name('permissions.bulk-destroy');
        Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    });
});
