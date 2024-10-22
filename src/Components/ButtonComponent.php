<?php

namespace YourVendorName\YourPackageName\Components;

use Livewire\Component;

class ButtonComponent extends Component
{
    public $text;
    public $type;
    public $style;
    public $additionalClasses;

    public function mount($text = 'Button', $type = 'button', $style = 'primary', $additionalClasses = '')
    {
        $this->text = $text;
        $this->type = $type;
        $this->style = $style;
        $this->additionalClasses = $additionalClasses;
    }

    public function render()
    {
        return view('yourpackagename::livewire.button-component');
    }
}
