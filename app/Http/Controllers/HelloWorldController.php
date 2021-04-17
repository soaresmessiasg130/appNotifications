<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
  public function helloWorld () {
    return 'Hello, world!!!';
  }

  public function hello ($name = 'Anonymous Elephant') {
    return 'Hello, '.$name;
  }
}
