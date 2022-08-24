<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\SiteController::class)->group(function(){
    Route::get('/' , 'index')->name('site.index');
});
