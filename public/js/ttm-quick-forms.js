$(document).ready(function(){
    let forms = $('.ttm-quick-form');
    let recaptchaModal = $('#ttm-quick-forms-recaptcha-modal');

    $('.modal-close').click(function(){
        $(this).closest('.ttm-quick-forms-modal').css('display', 'none');
    });

    if (forms.length > 0){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        forms.each(function(){

            let form = $(this);
            let submitButton = form.find(':submit');

            submitButton.click(function(event){
                event.preventDefault();
                if (submitButton.data('use-recaptcha') === 1){
                    recaptchaModal.css('display', 'block');
                    $('#g-recaptcha').data('form', '#' + form.attr('id'));
                }
                else{
                    form.submit();
                }
            });

            form.submit(function (event) {
                event.preventDefault();
                let errorContainers = form.find('.ttm-quick-forms-validation-error-message');

                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: form.serialize()
                }).done(function (data) {
                    errorContainers.empty();
                    if (data.success) {
                        showAlertSuccess(data);
                        form[0].reset();
                    }
                    else {
                        showAlertFail(data);
                    }
                }).fail(function (error) {
                    errorContainers.empty();
                    if (error.status === 422){
                        let errors = error.responseJSON.errors;
                        $.each(errors, function(key, value){
                            $('#' + key + '-error').html(value[0]);
                        });
                    }
                    else{console.log(error);
                        showAlert('fail', 'Sent Failed', 'Something went wrong and your message could not be sent. Please try again later.');
                    }
                });
            });
        });
    }

    function showAlert(type, title, message){
        let alertModal = $('#ttm-quick-forms-alert-modal');
        let titleElement = alertModal.find('.modal-title');
        let messageElement = alertModal.find('.modal-message');

        alertModal.addClass(type);
        titleElement.html(title);
        messageElement.html(message);

        alertModal.css('display', 'block');
    }

    function showAlertSuccess(data){
        showAlert('success', data.alert_title, data.alert_message)
    }

    function showAlertFail(data){
        showAlert('fail', data.alert_title, data.alert_message)
    }

    function showAlertInfo(data){
        showAlert('info', data.alert_title, data.alert_message)
    }

    function showAlertWarning(data){
        showAlert('warning', data.alert_title, data.alert_message)
    }
});
