<?php

use App\Http\Controllers\ContactController;
use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', [ContactController::class, 'showForm']);

Route::post('/contact', [ContactController::class, 'storeMessage']);

Route::get('/messages', [ContactController::class, 'showMessages']);
