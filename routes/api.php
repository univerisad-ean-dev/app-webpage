<?php

use App\Http\Controllers\OrderControlller;
use Illuminate\Support\Facades\Route;


Route::post('/order', [OrderControlller::class, 'save']);
Route::post('/dotation', [OrderControlller::class, 'saveDonation']);
