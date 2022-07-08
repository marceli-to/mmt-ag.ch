<?php
namespace App\View\Components;
use Illuminate\View\Component;

class Preview extends Component
{

  /**
   * Slug
   *
   * @var string
   */
  public $slug;

  /**
   * Image
   *
   * @var string
   */
  public $image;

  /**
   * Text
   *
   * @var string
   */
  public $text;

  /**
   * Alt
   *
   * @var string
   */
  public $alt;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($slug = NULL, $image = NULL, $text = NULL, $alt = NULL)
  {
    $this->slug  = $slug;
    $this->image = $image;
    $this->text  = $text;
    $this->alt   = $alt;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('web.components.projects.preview');
  }
}
