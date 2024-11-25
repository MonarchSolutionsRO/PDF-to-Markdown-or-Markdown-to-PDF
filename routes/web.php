<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkdownController;
use App\Http\Controllers\PdfToMarkdownController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/markdown-to-pdf', [MarkdownController::class, 'index'])->name('markdown.index');
Route::post('/markdown-to-pdf/convert', [MarkdownController::class, 'convert'])->name('markdown.convert');
Route::get('/pdf-to-markdown', [PdfToMarkdownController::class, 'index'])->name('pdf.index');
Route::post('/pdf-to-markdown/convert', [PdfToMarkdownController::class, 'convert'])->name('pdf.convert');