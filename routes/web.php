<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/api', [ApiController::class, 'runApi']);

Route::get('/', function () {
    return view('welcome');
});
