<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Contact Subjects
    |--------------------------------------------------------------------------
    |
    | This value is a comma separated array for the options to display on the
    | subject select on the contact form.
    |
    */
    'contact-subject-list' => env('TTM_QUICK_FORMS_CONTACT_SUBJECT_LIST', 'Comment, Complaint, Question, Suggestion, Other'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Title (Success)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'contact-alert-modal-title-success' => env('TTM_QUICK_FORMS_CONTACT_ALERT_MODAL_TITLE_SUCCESS', 'Message Sent Successfully'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Message (Success)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'contact-alert-modal-message-success' => env('TTM_QUICK_FORMS_CONTACT_ALERT_MODAL_MESSAGE_SUCCESS', 'Your message was sent successfully. You will hear from us shortly on the email you provided.'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Title (Fail)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'contact-alert-modal-title-fail' => env('TTM_QUICK_FORMS_CONTACT_ALERT_MODAL_TITLE_FAIL', 'Message Failed to Send'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Message (Fail)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'contact-alert-modal-message-fail' => env('TTM_QUICK_FORMS_CONTACT_ALERT_MODAL_MESSAGE_FAIL', 'Something went wrong and your message could not be sent. Please try again later.'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Title (Fail)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'contact-recaptcha-modal-title' => env('TTM_QUICK_FORMS_CONTACT_RECAPTCHA_MODAL_TITLE', 'You are almost done'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Message (Fail)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'contact-recaptcha-modal-message' => env('TTM_QUICK_FORMS_CONTACT_RECAPTCHA_MODAL_MESSAGE', 'We just need to make sure you are not a robot!'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Title (Success)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'subscribe-alert-modal-title-success' => env('TTM_QUICK_FORMS_SUBSCRIBER_ALERT_MODAL_TITLE_SUCCESS', 'Subscribed Successfully'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Message (Success)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'subscribe-alert-modal-message-success' => env('TTM_QUICK_FORMS_SUBSCRIBER_ALERT_MODAL_MESSAGE_SUCCESS', 'Your subscription was successful. You will receive exclusive offers via email.'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Title (Fail)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'subscribe-alert-modal-title-fail' => env('TTM_QUICK_FORMS_SUBSCRIBER_ALERT_MODAL_TITLE_FAIL', 'Subscription Failed'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Message (Fail)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'subscribe-alert-modal-message-fail' => env('TTM_QUICK_FORMS_SUBSCRIBER_ALERT_MODAL_MESSAGE_FAIL', 'Something went wrong and your subscription could not be sent. Please try again later.'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Title (Fail)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'recaptcha-modal-title' => env('TTM_QUICK_FORMS_SUBSCRIBER_RECAPTCHA_MODAL_TITLE', 'You are almost done'),

    /*
    |--------------------------------------------------------------------------
    | Alert Modal Message (Fail)
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'recaptcha-modal-message' => env('TTM_QUICK_FORMS_SUBSCRIBER_RECAPTCHA_MODAL_MESSAGE', 'We just need to make sure you are not a robot!'),

    /*
    |--------------------------------------------------------------------------
    | Google Re-Captcha Key
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'use-google-recaptcha-on-subscribe-form' => env('TTM_QUICK_FORMS_USE_GOOGLE_RECAPTCHA_ON_SUBSCRIBE_FORM', false),

    /*
    |--------------------------------------------------------------------------
    | Google Re-Captcha Key
    |--------------------------------------------------------------------------
    |
    | This value activates the use of google re-captcha on the subscriber form.
    | If this value is set to true, all the mechanisms to enable the Google
    | re-captcha will be enabled. Also, the form won't be sent without passing
    | the re-captcha validation.
    |
    */
    'use-google-recaptcha-on-contact-form' => env('TTM_QUICK_FORMS_USE_GOOGLE_RECAPTCHA_ON_CONTACT_FORM', false),

    /*
    |--------------------------------------------------------------------------
    | Google Re-Captcha Key
    |--------------------------------------------------------------------------
    |
    | This value holds the Google re-captcha site key.
    | This value is used to make the request to the Google API.
    |
    */
    'google-recaptcha-site-key' => env('TTM_QUICK_FORMS_GOOGLE_RECAPTCHA_SITE_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Google Re-Captcha Secret
    |--------------------------------------------------------------------------
    |
    | This value holds the Google re-captcha secret key.
    | This value is used to validate the token from the Google API.
    |
    */
    'google-recaptcha-secret-key' => env('TTM_QUICK_FORMS_GOOGLE_RECAPTCHA_SECRET_KEY'),
];
