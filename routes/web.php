<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mycontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/index",function(){
    return view('insertRead');
});
Route::post("insertData",[mycontroller::class,"insert"]);