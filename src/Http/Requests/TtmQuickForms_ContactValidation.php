<?php

namespace TutorTonyM\QuickForms\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use TutorTonyM\QuickForms\Rules\TtmQuickForms_AlphaSpaces;
use TutorTonyM\QuickForms\Rules\TtmQuickForms_Email;
use TutorTonyM\QuickForms\Rules\TtmQuickForms_ExistsInSubjectList;
use TutorTonyM\QuickForms\Rules\TtmQuickForms_PhoneNumberUsa;
use TutorTonyM\QuickForms\Rules\TtmQuickForms_ReCaptcha;
use TutorTonyM\QuickForms\Rules\TtmQuickForms_Textarea;

class TtmQuickForms_ContactValidation extends FormRequest
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
            'ttm_sender_subject' => ['required', 'string', 'min:2', 'max:30', new TtmQuickForms_ExistsInSubjectList()],
            'ttm_sender_first_name' => ['required', 'string', 'min:2', 'max:20', new TtmQuickForms_AlphaSpaces()],
            'ttm_sender_last_name' => ['required', 'string', 'min:2', 'max:30', new TtmQuickForms_AlphaSpaces()],
            'ttm_sender_message' => ['required', 'string', 'min:2', 'max:500', new TtmQuickForms_Textarea()],
            'ttm_sender_email' => ['required', 'string', new TtmQuickForms_Email()],
        ];

        if (config('ttm-quick-forms.use-google-recaptcha-on-contact-form')){
            $rules['g_recaptcha_response'] = ['required', new TtmQuickForms_ReCaptcha()];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'ttm_sender_subject.required' => 'You need to chose a REASON for your message.',
            'ttm_sender_subject.min' => 'The REASON has to be at less :min characters long',
            'ttm_sender_subject.max' => 'The REASON cannon be more that :max characters',
            'ttm_sender_first_name.required' => 'A FIRST NAME is required',
            'ttm_sender_first_name.min' => 'The FIRST NAME has to be at less :min characters long',
            'ttm_sender_first_name.max' => 'The FIRST NAME cannon be more that :max characters',
            'ttm_sender_last_name.required' => 'A LAST NAME is required',
            'ttm_sender_last_name.min' => 'The LAST NAME has to be at less :min characters long',
            'ttm_sender_last_name.max' => 'The LAST NAME cannon be more that :max characters',
            'ttm_sender_message.required' => 'A MESSAGE is required',
            'ttm_sender_message.min' => 'The MESSAGE has to be at less :min characters long',
            'ttm_sender_message.max' => 'The MESSAGE cannon be more that :max characters',
            'ttm_sender_email.required' => 'You need to provide an EMAIL.',
            'ttm_sender_phone.required' => 'You need to provide an PHONE NUMBER.',
            'g_recaptcha_response.required' => 'The Re-Captcha is required.',
        ];
    }
}