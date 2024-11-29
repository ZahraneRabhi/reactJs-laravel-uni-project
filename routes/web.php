<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/categories', [CategorieController::class, 'index']);
Route::get('/{any}', function () {
    return view('welcome');
    })->where('any', '.*');