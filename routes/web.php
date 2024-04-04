<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/loginAction',[UserController::class,'loginAction'])->name('loginAction');

Route::get('/login/codePIN',[UserController::class,'codepin'])->name('codePIN');
Route::post('/codepinAction',[UserController::class,'codepinAction'])->name('codePINaction');
Route::get('/create',[UserController::class,'create'])->name('create');
Route::post('/create/action',[UserController::class,'createAction'])->name('createAction');
