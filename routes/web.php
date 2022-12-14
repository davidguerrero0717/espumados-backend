<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;

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

// Rutas Usuarios
Route::controller(UsersController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::post('/created', 'create')->name('created');
    Route::post('/users', 'showUsers')->name('users');
    Route::post('/showOne/{id}', 'show')->name('showOne');
    Route::post('/edit/{id}', 'update')->name('edit');
    Route::post('/delete/{id}', 'destroy')->name('delete');
});

// Rutas Roles
Route::controller(RolesController::class)->group(function() {
    Route::post('showRoles', 'showAll')->name('showRoles');
    Route::post('editRole/{id}', 'edit')->name('editRole');
    Route::post('storeRole', 'store')->name('storeRole');
    Route::post('updateRole/{role}', 'update')->name('updateRole');
    Route::post('deleteRol/{role}', 'destroy')->name('deleteRol');
});



