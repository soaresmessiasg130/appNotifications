<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\NotificationController;
use App\Models\Notification;

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

Route::get (
  '/',
  function ()
  {
    return view('welcome');
  }
);

/**
 * Notification
 */

Route::get (
  'notification',
  [
    NotificationController::class,
    'getAll'
  ]
);

Route::get (
  'notification/light',
  [
    NotificationController::class,
    'getAllLight'
  ]
);

Route::get (
  'notification/{id}',
  [
    NotificationController::class,
    'getById'
  ]
);

/** My Routes
 * ------------
 */

Route::get (
  'hello-world',
  [
    HelloWorldController::class,
    'helloWorld'
  ]
);

Route::get(
  'hello/{name?}',
  [
    HelloWorldController::class,
    'hello'
  ]
);

// Atribuição em Massa

Route::get (
  'bulk-assignment',
  function ()
  {
    $notification = [
      'title' => 'Rain day',
      'desc' => 'Now is rain',
      'created_at' => date ('Y-m-d H:i:s'),
      'updated_at' => date ('Y-m-d H:i:s')
    ];

    return \App\Models\Notification::create ($notification);
  }
);

/** Tests('test/')
 * ------------
 * Routes: {
 *   get: [
 *     'hello-world',
 *     'show-name/{name},
 *     'show-name-optional/{name}
 *   ]
 * }
 */

Route::get (
  'test/hello-world',
  function ()
  {
    return view('hello-world');
  }
);

Route::get (
  'test/show-name/{name}',
  function ($name)
  {
    return 'Your name is: '.$name;
  }
);

Route::get (
  'test/show-name-optional/{name?}',
  function ($name = 'Anonymous Elephant')
  {
    // if (isset($name)) {
    //   return 'Your name is: '.$name;
    // }

    // return 'Name is empty! Now, your name is: !';

    return 'Your name is: '.$name;
  }
);
