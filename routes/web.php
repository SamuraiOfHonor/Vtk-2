<?php

use App\Http\Controllers\Client\DirectionController;
use App\Http\Controllers\Client\FeedbackController;
use App\Http\Controllers\Client\FeedController;
use App\Http\Controllers\Client\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire/page-home');
});


Route::get('/feedback', function (){ 
    return view('livewire/page-feedback');
})->name('feedback');
Route::post('/feedback/feeds', [FeedController::class, 'store'])
    ->name('feedback.feeds.store'
);


Route::get('/Gallery', function () {
    return view('livewire/page-Gallery');
});
Route::get('/employee', function () {
    return view('livewire/page-employee');
});

Route::get('/employee/show/{worker}', [WorkerController::class, 'show'])
    ->name('page.single-worker'
);


Route::get('/building', function () {
    return view('livewire/page-building');
});


Route::get('/directions', function () {
    return view('livewire/page-directions');
});

Route::get('/directions/show/{direction}', [DirectionController::class, 'show'])
    ->name('page.single-direction'
);


Route::get('/dashboard', function () {
    return view('/welcome');
});

Route::fallback( function () {
    return view('pages.single-404');
});