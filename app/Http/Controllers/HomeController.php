<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
  
  public function getHome() {
    return view('welcome', array(
      'title' => 'Welcome to ' . config('gamecollection.site_name'),
      'page_h1' => 'Welcome to ' . config('gamecollection.site_name'),
    ));
  }
}