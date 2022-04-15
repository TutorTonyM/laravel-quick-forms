<div id="ttm-quick-forms-recaptcha-modal" class="ttm-quick-forms-modal info">

    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-close">&times;</span>
            <h2 class="modal-title">{{ config('ttm-quick-forms.recaptcha-modal-title') }}</h2>
        </div>
        <div class="modal-body">
            <p class="modal-message">{{ config('ttm-quick-forms.recaptcha-modal-message') }}</p>
            <div id="g-recaptcha" class="g-recaptcha"
                 data-sitekey="{{ config('ttm-quick-forms.google-recaptcha-site-key') }}"
                 data-callback="submit_form"
                 data-expired-callback="close_modal"></div>
            <span class="ajax-error error-red g-recaptcha-response-error"></span>
        </div>
    </div>

    <script>
        function submit_form() {
            let formId = $('#g-recaptcha').data('form');
            let form = $(formId);
            $('#recaptcha-response-field').val($('#g-recaptcha-response').val());
            form.submit();
            $('#ttm-quick-forms-recaptcha-modal').hide();
            grecaptcha.reset();
        }
        function close_modal() {
            $('#ttm-quick-forms-recaptcha-modal').hide();
            grecaptcha.reset();
        }
    </script>

</div>