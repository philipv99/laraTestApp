<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

#home page
Route::get('/', [ContactController::class, 'showForm']);

#Messages
Route::post('/contact', [ContactController::class, 'storeMessage']);

Route::get('/messages', [ContactController::class, 'showMessages']);

#Articles
Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/addArticle', [ArticleController::class, 'addArticle']);

Route::post('/createArticle', [ArticleController::class, 'createArticle'])->name('article.store');

Route::get('/addArticle/{id}/edit', [ArticleController::class, 'editArticle'])->name('article.edit');

Route::put('/addArticle/{id}', [ArticleController::class, 'updateArticle'])->name('article.update');
