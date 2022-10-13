<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mycontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::post("insertData",[mycontroller::class,"insert"]);
Route::get("/",[mycontroller::class, "readData"]);