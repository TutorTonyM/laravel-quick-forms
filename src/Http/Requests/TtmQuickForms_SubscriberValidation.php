<?php

namespace TutorTonyM\QuickForms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use TutorTonyM\QuickForms\Rules\TtmQuickForms_Email;
use TutorTonyM\QuickForms\Rules\TtmQuickForms_ReCaptcha;

class TtmQuickForms_SubscriberValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'ttm_subscriber_email' => ['required', 'string', 'unique:ttm_quick_forms_subscribers,ttm_subscriber_email', new TtmQuickForms_Email()],
        ];

        if (config('ttm-quick-forms.use-google-recaptcha-on-subscribe-form')){
            $rules['g_recaptcha_response'] = ['required', new TtmQuickForms_ReCaptcha()];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'ttm_subscriber_email.required' => 'You need to provide an EMAIL to subscribe.',
            'ttm_subscriber_email.unique' => 'This EMAIL has already been registered.',
            'ttm_subscriber_email.Email' => 'The EMAIL address has has to be in a valid format.',
            'g_recaptcha_response.required' => 'The Re-Captcha is required.',
        ];
    }
}