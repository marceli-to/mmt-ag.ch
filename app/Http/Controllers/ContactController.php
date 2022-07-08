<?php
namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
  protected $viewPath = 'web.pages.';

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  { 
    return view($this->viewPath . 'contact');
  }

}
