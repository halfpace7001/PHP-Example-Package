<?php


use Illuminate\Support\Facades\Route;
use Its\Calculator\CalculatorController;

Route::get('add/{a}/{b}', [Its\Calculator\CalculatorController::class, 'add']);
Route::get('sub/{a}/{b}', [Its\Calculator\CalculatorController::class, 'sub']);
