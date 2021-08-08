<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class InputPassword extends Component
{
    public $divClass;
    public $idName;
    public $label;
    public $name;
    public $class;
    public $value;
    public $placeholder;
    public $helpText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idName, $name, $label, $divClass = 'col-12', $class = '', $value = '', $placeholder = '', $helpText = '')
    {
        $this->idName = $idName;
        $this->name = $name;
        $this->label = $label;
        $this->divClass = $divClass;
        $this->class = $class;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->helpText = $helpText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input-password');
    }
}
