<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Button extends Component
{
    /**
     * The button classes.
     *
     * @var string
     */
    public $classes;

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
     * @param  string  $classes
     * @param  string  $href
     * @param  string  $target
     * @param  string  $text
     * @return void
     */
    public function __construct($href = null, $target = null, $classes = null, $text = null)
    {
        $this->href = $href;
        $this->target = $target;
        $this->classes = $classes;
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
