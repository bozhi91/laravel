<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//New register form
Route::get('/newRegForm', function(){ return view('newRegForm');});

//store a register
Route::post('/storeReg', 'Controller@createRegister');

//View all regs
Route::get('/list', 'Controller@viewRegisters');
Route::get('/', 'Controller@viewRegisters');

