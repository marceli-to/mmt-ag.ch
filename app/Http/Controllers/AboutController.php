<?php
namespace App\Http\Controllers;

class AboutController extends Controller
{
  protected $viewPath = 'web.pages.';

  public function team()
  { 
    return view($this->viewPath . 'team');
  }

  public function philosophy()
  { 
    return view($this->viewPath . 'philosophy');
  }
}
