<?php


use Illuminate\Support\Facades\Route;


Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth', 'verified']],
    function () {
        Route::controller(\App\Http\Controllers\AdminController::class)->group(function () {
            Route::get('/home', 'index')->name('admin.index');
        });

        Route::resources([
            'services' => \App\Http\Controllers\ServiceAdminController::class,
        ]);
    });
