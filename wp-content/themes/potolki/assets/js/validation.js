// VALIDATE CONSULTATION FORM
//======================================================
// $consultation_form_submit_button = $('.consultation_form_submit_button');

$(() => {
    $consultation_form = $('#consultation_form');
    $ajaxurl = '/wp-admin/admin-ajax.php';
    if ($consultation_form.length) {
        $consultation_form.validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 60,
                },
                phone: {
                    required: true,
                    rangelength: [18, 18],
                    remote: {
                        url: $ajaxurl,
                        type: 'POST',
                        data: {
                            'action': 'check_phone',
                            'phone': function () {
                                return $('#phone').val()
                            },
                        },
                    },
                },
            },
            messages: {
                name: {
                    required: 'Введите имя',
                    maxlength: 'А вы не задумывались о смене имени?',
                },
                phone: {
                    required: 'Введите номер телефона',
                    rangelength: 'Некоректная длинна номера',
                },
            },
            submitHandler: function (form) {
                // alert('ddd');
                console.log('submitHandler');
                $.ajax({
                    url: $ajaxurl,
                    type: 'POST',
                    data: {
                        'action': 'validate_consultation_form',
                        'name': $('#name').val(),
                        'phone': $('#phone').val()
                    },
                    dataType: 'json',
                    success: function (responce) {
                        console.log($consultation_form.css('height'));
                        console.log($('html').css('font-size'));
                        let height_rem = +$consultation_form.css('height').slice(0, -2) / +$('html').css('font-size').slice(0, -2);
                        console.log('тут');
                        $('.consultation_form_success').css({
                            // display: 'flex',
                            opacity: '1',
                            height: height_rem + 'rem',
                        });
                        $('.consultation_form_success').prepend('<p>Ваша заявка принята</p>');
                        $consultation_form.remove();

                        console.log(responce);
                    },
                    error: function (error) {
                        console.log('error');
                    },
                })
            },
        })
    }
})