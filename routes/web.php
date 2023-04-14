<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    UserController,
    RoleController,
    PermissionController,
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

Auth::routes(['verify'=>true]);


Route::middleware(['auth', 'verified'])->group(function () {
    // Custom Route
    Route::delete('/delete_checked_users',[UserController::class,'destroyCheckUser'])->name('delete_checked_user');
    // Resource Routes
    Route::get('/home', [HomeController::class, 'index'])->name('home');    
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
});

