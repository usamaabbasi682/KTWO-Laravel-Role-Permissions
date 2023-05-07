<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    UserController,
    RoleController,
    PermissionController,
    ProfileController,
    SettingController,
    ModelPermitController,
};

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
    return to_route('login');
});

Route::middleware(['checkIsAdmin'])->group(function () {
    Auth::routes(['verify'=>true]); 
});

Route::middleware(['auth', 'verified','checkIsAdmin'])->group(function () {
    // Custom Route
    Route::delete('/delete_checked_users',[UserController::class,'destroyCheckUser'])->name('delete_checked_user');
    Route::post('assign-permission/roles/{role}',[RoleController::class,'assignPermissions'])->name('assign-permission.role');
    Route::post('change-email/users/{user}',[ProfileController::class,'change_email'])->name('user.change_email');
    Route::post('change-password/users/{user}',[ProfileController::class,'change_password'])->name('user.change_password');
    // Resource Routes
    Route::get('/home', [HomeController::class, 'index'])->name('home');    
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::singleton('/profile',ProfileController::class)->destroyable();
    Route::singleton('/settings',SettingController::class); 
    Route::resource('/models',ModelPermitController::class);
});

