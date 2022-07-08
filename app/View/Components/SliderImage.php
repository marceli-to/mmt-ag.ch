<?php
namespace App\View\Components;
use Illuminate\View\Component;

class SliderImage extends Component
{
  /**
   * Image
   *
   * @var string
   */
  public $image;

  /**
   * Caption
   *
   * @var string
   */
  public $caption;

  /**
   * Classes
   *
   * @var string
   */
  public $classes;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($image = NULL, $caption = NULL, $classes = NULL)
  {
    $this->image    = $image;
    $this->caption  = explode('|', $caption);
    $this->classes  = $classes;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('web.components.projects.slider-image');
  }
}
