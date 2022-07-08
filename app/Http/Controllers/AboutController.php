<?php
namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class AboutController extends BaseController
{
  protected $viewPath = 'web.pages.';

  public function __construct()
  {
    parent::__construct();
  }

  public function team()
  { 
    return view($this->viewPath . 'team');
  }

  public function philosophy()
  { 
    return view($this->viewPath . 'philosophy');
  }
}
