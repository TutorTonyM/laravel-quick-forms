<?php

namespace TutorTonyM\QuickForms\Views\Components;

use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class ReCaptchaPush extends Component
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
        $path = File::exists(resource_path('views\components\vendor\TutorTonyM\quick-forms\re-captcha-push.blade.php'))
            ? 'components.vendor.TutorTonyM.quick-forms.re-captcha-push'
            : 'ttm-quick-forms::_publishable.re-captcha-push';

        return view($path);
    }
}