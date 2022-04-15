<?php

namespace TutorTonyM\QuickForms\Views\Components;

use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class ReCaptchaModal extends Component
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
        $path = File::exists(resource_path('views\components\vendor\TutorTonyM\quick-forms\re-captcha-modal.blade.php'))
            ? 'components.vendor.TutorTonyM.quick-forms.re-captcha-modal'
            : 'ttm-quick-forms::re-captcha-modal';

        return view($path);
    }
}