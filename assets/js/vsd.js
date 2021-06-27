$(function () {
    // $('.contact__content').submit(function(e){
    //     e.preventDefault();
    //     alert(1);
    // })
    $('.contact__content').validate({
        rules: {
            c_name: 'required',
            c_phone: 'required',
            c_email: {
                required: true,
                email: true
            }
        },
        messages: {
            c_name: 'Vui lòng nhập tên của bạn.',
            c_phone: 'Vui lòng nhập số điện thoại của bạn.',
            // address: 'Vui lòng nhập địa chỉ của bạn.',
            c_email: {
                required: "Vui lòng nhập địa chỉ email của bạn.",
                email: "Địa chỉ email không đúng."
            }
        },
        submitHandler: function (form) {
            var obj = $(form);
            $.ajax({
                type: "post",
                url: MyAjax.ajax_url,
                dataType: 'json',
                data: obj.serialize(),
                beforeSend: function () {
                    $('input, button[type=submit]', $(form)).attr('disabled', true).css({ 'opacity': '0.5' });
                },
                success: function (data) {
                    $('input, button[type=submit]', $(form)).attr('disabled', false).css({ 'opacity': 1 });
                    if (data.status == 'success') {
                        swal({
                            "title": "Thành công",
                            "text": "<p style='color: #008000;font-weight: bold'>" + data.message + "</p>",
                            "type": "success",
                            html: true
                        });
                        $(form).trigger("reset");
                    }
                    else {
                        swal({
                            "title": "Lỗi!!",
                            "text": "<p style='color: #008000;font-weight: bold'>" + data.message + "</p>",
                            "type": "error",
                            html: true
                        });
                    }
                }
            });
            return false;
        }
    });


});