<?php
namespace App\Http\Controllers;

class ContactController extends Controller
{
  protected $viewPath = 'web.pages.';

  public function index()
  { 
    return view($this->viewPath . 'contact');
  }

}
