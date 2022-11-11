<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/ApiController', [ApiController::class, 'runApi']);

Route::get('/api', [ApiController::class, 'apiBlade']);

Route::get('/', function (){
    return view('api');
});