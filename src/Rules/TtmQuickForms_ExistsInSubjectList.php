<?php

namespace TutorTonyM\QuickForms\Rules;

use Illuminate\Contracts\Validation\Rule;

class TtmQuickForms_ExistsInSubjectList implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $list = array_map('trim', explode(',', config('ttm-quick-forms.contact-subject-list')));
        return in_array($value, $list);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The REASON selected is not valid. Chose one from the options given.';
    }
}