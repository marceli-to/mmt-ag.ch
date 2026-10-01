<?php
namespace App\Http\Controllers;

class ProjectController extends Controller
{
  protected $viewPath = 'web.pages.';

  public function listing($slug = NULL)
  { 
    return view($this->viewPath . 'partials.projects.listing.' . $slug);
  }

  public function detail($slug = NULL)
  { 
    return view($this->viewPath . 'partials.projects.detail.' . $slug);
  }
}
