<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'showIndex'])->name('books_index');

Route::get('/books/details', [PagesController::class, 'showBookDetails'])->name('book_details');
