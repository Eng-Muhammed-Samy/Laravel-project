<?php

use Illuminate\Support\Facades\Route;
//to home page
Route::get('/Home', 'App\Http\Controllers\control1@gethome');
//to about page
Route::get('/About', 'App\Http\Controllers\control1@getabout');
//to contact us page
Route::get('/Contact', 'App\Http\Controllers\control1@getcontact');
//to add student page
Route::get('/new student', 'App\Http\Controllers\control1@addstudent');
//to students page
Route::get('/students/{studentanaumber}', 'App\Http\Controllers\control1@getstudent');
//
Route::post('/submit student', 'App\Http\Controllers\control1@submitstudent');
Route::get('/All Student', 'App\Http\Controllers\control1@getAllStudent');
