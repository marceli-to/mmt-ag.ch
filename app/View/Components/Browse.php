<?php
namespace App\View\Components;
use Illuminate\View\Component;

class Browse extends Component
{
  /**
   * Title
   *
   * @var string
   */
  public $title;

  /**
   * Prev
   *
   * @var string
   */
  public $prev;

  /**
   * Next
   *
   * @var string
   */
  public $next;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($title = NULL, $prev = NULL, $next = NULL)
  {
    $this->title = $title;
    $this->prev  = $prev;
    $this->next  = $next;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('web.components.projects.browse');
  }
}
