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

Route::get('Intelligence/InfoEductaion', function () {
    return view('educational.page-BasicInfo');
});
Route::get('Intelligence/Structure', function () {
    return view('educational.page-StrCont');
});
Route::get('Intelligence/Documents', function () {
    return view('educational.page-Documents');
}); 
Route::get('Intelligence/Education', function () {
    return view('educational.page-Education');
});
Route::get('Intelligence/Standards', function () {
    return view('educational.page-Standards');
});
Route::get('Intelligence/Management', function () {
    return view('educational.page-Management');
});
Route::get('Intelligence/SupportProcess', function () {
    return view('educational.page-SupportProcess');
});
Route::get('Intelligence/Scholarships', function () {
    return view('educational.page-Scholarships');
});
Route::get('Intelligence/Paid', function () {
    return view('educational.page-Paid');
});
Route::get('Intelligence/Activities', function () {
    return view('educational.page-Activities');
});
Route::get('Intelligence/Reception', function () {
    return view('educational.page-Reception');
});
Route::get('Intelligence/Environment', function () {
    return view('educational.page-Environment');
});
Route::get('Intelligence/Cooperation', function () {
    return view('educational.page-Cooperation');
});
Route::get('Intelligence/Food', function () {
    return view('educational.page-Food');
});


Route::get('/dashboard', function () {
    return view('/welcome');
});

Route::fallback( function () {
    return view('pages.single-404');
});