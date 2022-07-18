<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\Caixa_controller::class,'caixa']);
Route::get('/produtos',[\App\Http\Controllers\Produtos_controller::class,'produtos']);