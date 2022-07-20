<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtos_Controller;

Route::get('/',[\App\Http\Controllers\Caixa_controller::class,'caixa']);
Route::get('/produtos',[\App\Http\Controllers\Produtos_controller::class,'index']);