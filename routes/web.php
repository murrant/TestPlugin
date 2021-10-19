<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth'], 'guard' => 'auth'], function () {

    Route::get('/plugins/test-plugin', [\LibreNMS\TestPlugin\Http\Controllers\HomeController::class, 'index'])->name('test-plugin.index');

});
