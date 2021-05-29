<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Button extends Component
{
    /**
     * The button type.
     *
     * @var string
     */
    public $type;

    /**
     * The button href.
     *
     * @var string
     */
    public $href;

    /**
     * The button target.
     *
     * @var string
     */
    public $target;

    /**
     * The button text.
     *
     * @var string
     */
    public $text;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $href
     * @param  string  $target
     * @param  string  $text
     * @return void
     */
    public function __construct($type = null, $href = null, $target = "_blank", $text = null)
    {
        $this->type = $type;
        $this->href = $href;
        $this->target = $target;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.button');
    }
}
