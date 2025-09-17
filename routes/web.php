<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;


Route::get('/', [InvoiceController::class, 'index']);
Route::get('/offertes', [InvoiceController::class, 'offertes']);
Route::get('/offertes/{nummer}', [InvoiceController::class, 'offerteDetail']);
