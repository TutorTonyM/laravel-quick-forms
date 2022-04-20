<?php

namespace TutorTonyM\QuickForms\Views\Components;

use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class SubscribeForm extends Component
{
    public string $labelText;
    public string $inputText;
    public string $buttonText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($labelText = 'Subscribe for Special Offers', $inputText = 'Enter your Email', $buttonText = 'SUBMIT')
    {
        $this->labelText = $labelText;
        $this->inputText = $inputText;
        $this->buttonText = $buttonText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $path = File::exists(resource_path('views\components\vendor\TutorTonyM\quick-forms\subscribe-form.blade.php'))
            ? 'components.vendor.TutorTonyM.quick-forms\subscribe-form'
            : 'ttm-quick-forms::_non-publishable.subscribe-form';

        return view($path);
    }
}