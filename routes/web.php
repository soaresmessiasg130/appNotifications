<?php

use Illuminate\Support\Facades\Route;

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

/**
 * ------------------------------------------------------------------------
 * Tests
 *
 */

Route::get('hello-world', function () {
  return view('hello-world');
});

Route::get('show-name/{name}', function ($name) {
  return 'Your name is: '.$name;
});

Route::get('show-name-optional/{name?}', function ($name = 'Anonymous Elephant') {
  // if (isset($name)) {
  //   return 'Your name is: '.$name;
  // }

  // return 'Name is empty! Now, your name is: !';

  return 'Your name is: '.$name;
});
