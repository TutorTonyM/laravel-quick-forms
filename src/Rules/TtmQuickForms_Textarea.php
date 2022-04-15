<?php

namespace TutorTonyM\QuickForms\Rules;

use Illuminate\Contracts\Validation\Rule;

class TtmQuickForms_Textarea implements Rule
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
        return preg_match('/^[\pL\d\s!@#$%&*()\-_=+;:\'",.?\/]+$/u', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute may only contain letters, numbers, spaces and the following characters (!@#$%&*()\-_=+;:\'",.?/)';
    }
}
