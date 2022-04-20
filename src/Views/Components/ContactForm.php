<?php

namespace TutorTonyM\QuickForms\Views\Components;

use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class ContactForm extends Component
{
    public string $subjectLabelText;
    public string $subjectDefaultOptionText;
    public array $subjectDefaultOptions;
    public string $firstNameLabelText;
    public string $firstNameText;
    public string $lastNameLabelText;
    public string $lastNameText;
    public string $emailLabelText;
    public string $emailText;
    public string $messageLabelText;
    public string $messageText;
    public string $buttonText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subjectLabelText = 'Reason for Message',
                                $subjectDefaultOptionText = 'Reason for Message',
                                $firstNameLabelText = "First Name",
                                $firstNameText = "First Name",
                                $lastNameLabelText = "Last Name",
                                $lastNameText = "Last Name",
                                $emailLabelText = "Email Address",
                                $emailText = "Email Address",
                                $messageLabelText = "Message",
                                $messageText = "Message",
                                $buttonText = 'SUBMIT')
    {
        $this->subjectLabelText = $subjectLabelText;
        $this->subjectDefaultOptionText = $subjectDefaultOptionText;
        $this->firstNameLabelText = $firstNameLabelText;
        $this->firstNameText = $firstNameText;
        $this->lastNameLabelText = $lastNameLabelText;
        $this->lastNameText = $lastNameText;
        $this->emailLabelText = $emailLabelText;
        $this->emailText = $emailText;
        $this->messageLabelText = $messageLabelText;
        $this->messageText = $messageText;
        $this->buttonText = $buttonText;
        $this->subjectDefaultOptions = array_map('trim', explode(',', config('ttm-quick-forms.contact-subject-list')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $path = File::exists(resource_path('views\components\vendor\TutorTonyM\quick-forms\contact-form.blade.php'))
            ? 'components.vendor.TutorTonyM.quick-forms.contact-form'
            : 'ttm-quick-forms::_non-publishable.contact-form';

        return view($path);
    }
}