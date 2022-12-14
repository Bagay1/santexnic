<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\SiteController::class)->group(function(){
    Route::get('/' , 'index')->name('site.index');
});


Route::controller(\App\Http\Controllers\ServiceSaiteController::class)->group(function(){
    Route::get('/services/{id}', 'single')->name('services.single');
});

Route::controller(\App\Http\Controllers\TelegramController::class)->group(function(){
    Route::post('/post-telegram', 'postMessage')->name('postMessage');
});
