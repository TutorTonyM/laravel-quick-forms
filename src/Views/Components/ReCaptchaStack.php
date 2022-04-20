<?php

namespace TutorTonyM\QuickForms\Views\Components;

use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class ReCaptchaStack extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $path = File::exists(resource_path('views\components\vendor\TutorTonyM\quick-forms\re-captcha-stack.blade.php'))
            ? 'components.vendor.TutorTonyM.quick-forms.re-captcha-stack'
            : 'ttm-quick-forms::_publishable.re-captcha-stack';

        return view($path);
    }
}