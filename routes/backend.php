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

        Route::controller(\App\Http\Controllers\ServiceAdminController::class)->group(function(){
            Route::post('/importServices', 'importServices')->name('importServices');
            Route::put('/active/{id}' , 'active')->name('servicess.active');
        });

        Route::controller(\App\Http\Controllers\AboutController::class)->group(function(){
            Route::get('/about-admin', 'aboutIndex')->name('about.index');
            Route::post('/create-about' , 'store')->name('about.store');
        });
    });
