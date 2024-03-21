<?php

use Bitfumes\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Bitfumes\Contact\Http\Controllers'], function () {
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('contact', [ContactController::class, 'send']);
});
