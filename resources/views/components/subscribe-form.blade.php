@props([
'label',
'input',
'button',
])

<form id="ttm-subscribe-form" class="ttm-quick-form" method="POST" action="{{ route('ttm-subscriber.store') }}" {{ $attributes }}>

        @csrf

        @if(isset($label))
            <label for="ttm_subscriber_email" {{ $label->attributes }}>{{ $label == '' ? $labelText : $label }}</label>
        @else
            <label for="ttm_subscriber_email">{{ $labelText }}</label>
        @endif

        @if(isset($input))
            <input {{ $input->attributes }}
                       id="ttm_subscriber_email"
                       type="email"
                       name="ttm_subscriber_email"
                       value="{{ old('ttm_subscriber_email') }}"
                       @if($inputText != '') placeholder="{{ $input == '' ? $inputText : $input }}" @endif>
        @else
            <input id="ttm_subscriber_email"
                       type="email"
                       name="ttm_subscriber_email"
                       value="{{ old('ttm_subscriber_email') }}"
                       @if($inputText != '') placeholder="{{ $inputText }}" @endif>
        @endif

        @if(config('ttm-quick-forms.use-google-recaptcha-on-subscribe-form')
                && !is_null(config('ttm-quick-forms.google-recaptcha-site-key'))
                && config('ttm-quick-forms.google-recaptcha-site-key') != ''
                && !is_null(config('ttm-quick-forms.google-recaptcha-secret-key'))
                && config('ttm-quick-forms.google-recaptcha-secret-key') != '')
            @if(isset($button))
                <button id="submit-subscription-button" type="submit" data-use-recaptcha="1" {{ $button->attributes }}>{{ $button == '' ? $buttonText : $button }}</button>
            @else
                <button id="submit-subscription-button" type="submit" data-use-recaptcha="1">{{ $buttonText }}</button>
            @endif
            <input id="recaptcha-response-field" type="hidden" name="g_recaptcha_response">
            <span id="subscriber_recaptcha_error" class="subscriber-validation-error-message"></span>
        @else
            @if(isset($button))
                <button id="submit-subscription-button" type="submit" {{ $button->attributes }}>{{ $button == '' ? $buttonText : $button }}</button>
            @else
                <button id="submit-subscription-button" type="submit">{{ $buttonText }}</button>
            @endif
        @endif

        @if(isset($error))
            <span id="ttm_subscriber_email-error" {{ $error->attributes->class(["ttm-quick-forms-validation-error-message"]) }}></span>
        @else
            <span id="ttm_subscriber_email-error" class="ttm-quick-forms-validation-error-message"></span>
        @endif

</form>
