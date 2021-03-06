<?php

namespace TutorTonyM\QuickForms\Rules;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;

class TtmQuickForms_ReCaptcha implements Rule
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
    public function passes($attribute, $value): bool
    {
        $client = new Client();

        $response = $client->post('https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' =>
                    [
                        'secret' => config('ttm-quick-forms.google-recaptcha-secret-key'),
                        'response' => $value
                    ]
            ]
        );

        return json_decode($response->getBody())->success;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'ReCaptcha verification failed.';
    }
}