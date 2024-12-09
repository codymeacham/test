<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [HomeController::class, 'showContactForm']);
Route::get('/terms', [HomeController::class, 'termspage']);
Route::get('/privacy',[HomeController::class, 'privacypage']);
Route::get('/forgiveness',[HomeController::class, 'showForgivenessPage']);

Route::post('/health-subsidy', [HomeController::class, 'healthSubsidyStore']);
Route::post('/forgiveness', [HomeController::class, 'forgivenessStore']);


