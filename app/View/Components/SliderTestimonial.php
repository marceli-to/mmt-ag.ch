<?php
namespace App\View\Components;
use Illuminate\View\Component;

class SliderTestimonial extends Component
{
  /**
   * Quote
   *
   * @var string
   */
  public $quote;

  /**
   * Author
   *
   * @var string
   */
  public $author;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($quote = NULL, $author = NULL)
  {
    $this->quote  = $quote;
    $this->author = $author;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('web.components.projects.slider-testimonial');
  }
}
