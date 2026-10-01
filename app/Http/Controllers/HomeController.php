<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
  protected $viewPath = 'web.pages.';

  public function index()
  { 
    return view($this->viewPath . 'home');
  }

}
