<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
use App\Models\Category;


Route::resource('category', CategoryController::class);
Route::resource('item', ItemController::class);
Route::resource('transaction', TransactionController::class);

