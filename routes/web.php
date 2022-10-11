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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::delete('permissions_mass_destroy', 'PermissionController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'RoleController');
    Route::delete('roles_mass_destroy', 'RoleController@massDestroy')->name('roles.mass_destroy');
});
