@props([
'label',
'input',
'textarea',
'button',
])

<form id="ttm-contact-form" class="ttm-quick-form" method="POST" action="{{ route('ttm-contact.store') }}" {{ $attributes }}>

    @csrf

    <!-- Subject -->
    @if(isset($subjectLabel))
        <label for="ttm_sender_subject" {{ $subjectLabel->attributes }}>{{ $subjectLabel == '' ? $subjectLabelText : $subjectLabel }}</label>
    @elseif($subjectLabelText != '')
        <label for="ttm_sender_subject">{{ $subjectLabelText }}</label>
    @endif

    @if(isset($subjectSelect))
    <select {{ $subjectSelect->attributes }}
                id="ttm_sender_subject"
                name="ttm_sender_subject">
        @if(isset($subjectDefaultOption))
        <option selected disabled value="">{{ $subjectDefaultOption == '' ? $subjectDefaultOptionText : $subjectDefaultOption }}</option>
        @elseif($subjectDefaultOptionText != '')
        <option selected disabled value="">{{ $subjectDefaultOptionText }}</option>
        @endif
    </select>
    @else
    <select id="ttm_sender_subject"
            name="ttm_sender_subject">
        @if(isset($subjectDefaultOption))
            <option selected disabled value="">{{ $subjectDefaultOption == '' ? $subjectDefaultOptionText : $subjectDefaultOption }}</option>
        @elseif($subjectDefaultOptionText != '')
            <option selected disabled value="">{{ $subjectDefaultOptionText }}</option>
        @endif
        @foreach($subjectDefaultOptions as $item)
                <option value="{{ $item }}">{{ $item }}</option>
        @endforeach
    </select>
    @endif

    @if(isset($error))
        <span id="ttm_sender_subject-error" {{ $error->attributes->class(["ttm-quick-forms-validation-error-message"]) }}></span>
    @else
        <span id="ttm_sender_subject-error" class="ttm-quick-forms-validation-error-message"></span>
    @endif
    <!-- /Subject -->


    <!-- First Name -->
    @if(isset($firstNameLabel))
        <label for="ttm_sender_first_name" {{ $firstNameLabel->attributes }}>{{ $firstNameLabel == '' ? $firstNameLabelText : $firstNameLabel }}</label>
    @elseif($firstNameLabelText != '')
        <label for="ttm_sender_first_name">{{ $firstNameLabelText }}</label>
    @endif

    @if(isset($firstName))
        <input {{ $firstName->attributes }}
               id="ttm_sender_first_name"
               type="text"
               name="ttm_sender_first_name"
               value="{{ old('ttm_sender_first_name') }}"
               @if($firstNameText != '') placeholder="{{ $firstName == '' ? $firstNameText : $firstName }}" @endif>
    @else
        <input id="ttm_sender_first_name"
               type="text"
               name="ttm_sender_first_name"
               value="{{ old('ttm_sender_first_name') }}"
               @if($firstNameText != '') placeholder="{{ $firstNameText }}" @endif>
    @endif

    @if(isset($error))
        <span id="ttm_sender_first_name-error" {{ $error->attributes->class(["ttm-quick-forms-validation-error-message"]) }}></span>
    @else
        <span id="ttm_sender_first_name-error" class="ttm-quick-forms-validation-error-message"></span>
    @endif
    <!-- /First Name -->

    <!-- Last Name -->
    @if(isset($lastNameLabel))
        <label for="ttm_sender_last_name" {{ $lastNameLabel->attributes }}>{{ $lastNameLabel == '' ? $lastNameLabelText : $lastNameLabel }}</label>
    @elseif($lastNameLabelText != '')
        <label for="ttm_sender_last_name">{{ $lastNameLabelText }}</label>
    @endif

    @if(isset($lastName))
        <input {{ $lastName->attributes }}
               id="ttm_sender_last_name"
               type="text"
               name="ttm_sender_last_name"
               value="{{ old('ttm_sender_last_name') }}"
               @if($lastNameText != '') placeholder="{{ $lastName == '' ? $lastNameText : $lastName }}" @endif>
    @else
        <input id="ttm_sender_last_name"
               type="text"
               name="ttm_sender_last_name"
               value="{{ old('ttm_sender_last_name') }}"
               @if($lastNameText != '') placeholder="{{ $lastNameText }}" @endif>
    @endif

    @if(isset($error))
        <span id="ttm_sender_last_name-error" {{ $error->attributes->class(["ttm-quick-forms-validation-error-message"]) }}></span>
    @else
        <span id="ttm_sender_last_name-error" class="ttm-quick-forms-validation-error-message"></span>
    @endif
    <!-- /Last Name -->

    <!-- Email -->
    @if(isset($emailLabel))
        <label for="ttm_sender_email" {{ $emailLabel->attributes }}>{{ $emailLabel == '' ? $emailLabelText : $emailLabel }}</label>
    @elseif($emailLabelText != '')
        <label for="ttm_sender_email">{{ $emailLabelText }}</label>
    @endif

    @if(isset($email))
        <input {{ $email->attributes }}
               id="ttm_sender_email"
               type="text"
               name="ttm_sender_email"
               value="{{ old('ttm_sender_email') }}"
               @if($emailText != '') placeholder="{{ $email == '' ? $emailText : $email }}" @endif>
    @else
        <input id="ttm_sender_email"
               type="text"
               name="ttm_sender_email"
               value="{{ old('ttm_sender_email') }}"
               @if($emailText != '') placeholder="{{ $emailText }}" @endif>
    @endif

    @if(isset($error))
        <span id="ttm_sender_email-error" {{ $error->attributes->class(["ttm-quick-forms-validation-error-message"]) }}></span>
    @else
        <span id="ttm_sender_email-error" class="ttm-quick-forms-validation-error-message"></span>
    @endif
    <!-- /Email -->

    <!-- Message -->
    @if(isset($messageLabel))
        <label for="ttm_sender_message" {{ $messageLabel->attributes }}>{{ $messageLabel == '' ? $messageLabelText : $messageLabel }}</label>
    @elseif($messageLabelText != '')
        <label for="ttm_sender_message">{{ $messageLabelText }}</label>
    @endif

    @if(isset($message))
        <textarea {{ $message->attributes }}
               id="ttm_sender_message"
               name="ttm_sender_message"
               @if($messageText != '') placeholder="{{ $message == '' ? $messageText : $message }}" @endif>{{ old('ttm_sender_message') }}</textarea>
    @else
        <textarea id="ttm_sender_message"
                  name="ttm_sender_message"
                  @if($messageText != '') placeholder="{{ $messageText }}" @endif>{{ old('ttm_sender_message') }}</textarea>
    @endif

    @if(isset($error))
        <span id="ttm_sender_message-error" {{ $error->attributes->class(["ttm-quick-forms-validation-error-message"]) }}></span>
    @else
        <span id="ttm_sender_message-error" class="ttm-quick-forms-validation-error-message"></span>
    @endif
    <!-- /Message -->

    <!-- Submit Button -->
    @if(config('ttm-quick-forms.use-google-recaptcha-on-contact-form')
            && !is_null(config('ttm-quick-forms.google-recaptcha-site-key'))
            && config('ttm-quick-forms.google-recaptcha-site-key') != ''
            && !is_null(config('ttm-quick-forms.google-recaptcha-secret-key'))
            && config('ttm-quick-forms.google-recaptcha-secret-key') != '')
        @if(isset($button))
            <button id="submit-contact-form-button" type="submit" data-use-recaptcha="1" {{ $button->attributes }}>{{ $button == '' ? $buttonText : $button }}</button>
        @else
            <button id="submit-contact-form-button" type="submit" data-use-recaptcha="1">{{ $buttonText }}</button>
        @endif
        <input id="recaptcha-response-field" type="hidden" name="g_recaptcha_response">
        <span id="subscriber_recaptcha_error" class="subscriber-validation-error-message"></span>
    @else
        @if(isset($button))
            <button id="submit-contact-form-button" type="submit" {{ $button->attributes }}>{{ $button == '' ? $buttonText : $button }}</button>
        @else
            <button id="submit-contact-form-button" type="submit">{{ $buttonText }}</button>
        @endif
    @endif
    <!-- /Submit Button -->

</form>
