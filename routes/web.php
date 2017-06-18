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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one', function () {
  return view('one');
});

Route::put('/two', function () {
  return view('two');
});

// Route::match(['options', 'put'], '/two', function () {
//
//   return view('two');
//
// })->middleware('cors');
