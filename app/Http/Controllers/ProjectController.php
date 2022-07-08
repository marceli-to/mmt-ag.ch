<?php
namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class ProjectController extends BaseController
{
  protected $viewPath = 'web.pages.';

  public function __construct()
  {
    parent::__construct();
  }

  public function listing($slug = NULL)
  { 
    return view($this->viewPath . 'partials.projects.listing.' . $slug);
  }

  public function detail($slug = NULL)
  { 
    return view($this->viewPath . 'partials.projects.detail.' . $slug);
  }
}
