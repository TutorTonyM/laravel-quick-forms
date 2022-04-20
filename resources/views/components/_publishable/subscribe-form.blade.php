<form id="ttm-subscribe-form" class="ttm-quick-form" method="POST" action="{{ route('ttm-subscriber.store') }}">

        @csrf

        <label for="ttm_subscriber_email">Subscribe for Special Offers</label>
        <input id="ttm_subscriber_email"
                   type="email"
                   name="ttm_subscriber_email"
                   value="{{ old('ttm_subscriber_email') }}"
                   placeholder="Enter your Email">


        <button id="submit-subscription-button" type="submit" data-use-recaptcha="0">SUBMIT</button>

        <input id="recaptcha-response-field" type="hidden" name="g_recaptcha_response">
        <span id="subscriber_recaptcha_error" class="subscriber-validation-error-message"></span>
        <span id="ttm_subscriber_email-error" class="ttm-quick-forms-validation-error-message"></span>

</form>
