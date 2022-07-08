<?php
namespace App\View\Components;
use Illuminate\View\Component;

class Heading extends Component
{
  /**
   * Title
   *
   * @var string
   */
  public $title;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($title = NULL)
  {
    $this->title = $title;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('web.components.projects.heading');
  }
}
