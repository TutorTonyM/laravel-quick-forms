<form id="ttm-contact-form" class="ttm-quick-form" method="POST" action="{{ route('ttm-contact.store') }}">

    @csrf

    <!-- Subject -->
    <label for="ttm_sender_subject">Reason for Message</label>
    <select id="ttm_sender_subject" name="ttm_sender_subject">
        <option selected disabled value="">Reason for Message</option>
    </select>
    <span id="ttm_sender_subject-error" class="ttm-quick-forms-validation-error-message"></span>
    <!-- /Subject -->

    <!-- First Name -->
    <label for="ttm_sender_first_name">First Name</label>
    <input id="ttm_sender_first_name"
           type="text"
           name="ttm_sender_first_name"
           value="{{ old('ttm_sender_first_name') }}"
           placeholder="First Name">
    <span id="ttm_sender_first_name-error" class="ttm-quick-forms-validation-error-message"></span>
    <!-- /First Name -->

    <!-- Last Name -->
    <label for="ttm_sender_last_name">Last Name</label>
    <input id="ttm_sender_last_name"
           type="text"
           name="ttm_sender_last_name"
           value="{{ old('ttm_sender_last_name') }}"
           placeholder="Last Name">
    <span id="ttm_sender_last_name-error" class="ttm-quick-forms-validation-error-message"></span>
    <!-- /Last Name -->

    <!-- Email -->
    <label for="ttm_sender_email">Email Address</label>
    <input id="ttm_sender_email"
           type="text"
           name="ttm_sender_email"
           value="{{ old('ttm_sender_email') }}"
           placeholder="Email Address">
    <span id="ttm_sender_email-error" class="ttm-quick-forms-validation-error-message"></span>
    <!-- /Email -->

    <!-- Message -->
    <label for="ttm_sender_message">Message</label>
    <textarea id="ttm_sender_message"
              name="ttm_sender_message"
              placeholder="Message">{{ old('ttm_sender_message') }}</textarea>
    <span id="ttm_sender_message-error" class="ttm-quick-forms-validation-error-message"></span>
    <!-- /Message -->

    <!-- Submit Button -->
    <button id="submit-contact-form-button" type="submit" data-use-recaptcha="0">SUBMIT</button>
    <input id="recaptcha-response-field" type="hidden" name="g_recaptcha_response">
    <span id="subscriber_recaptcha_error" class="subscriber-validation-error-message"></span>
    <!-- /Submit Button -->

</form>
