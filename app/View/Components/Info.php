<?php
namespace App\View\Components;
use Illuminate\View\Component;

class Info extends Component
{

  /**
   * Archive
   *
   * @var boolean
   */
  public $archive;

  /**
   * Label
   *
   * @var string
   */
  public $label;

  /**
   * Description
   *
   * @var string
   */
  public $description;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($archive = FALSE, $label = NULL, $description = NULL)
  {
    $this->label = $label;
    $this->description = $description;
    $this->archive = $archive;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|string
   */
  public function render()
  {
    return view('web.components.projects.info');
  }
}
