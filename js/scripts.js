function logginForm() {


    $('#toolsBlur').click();
    // $(':input[name="memberEmail"]').prop('disabled', false);;
    $('.formBox2').show();
    // $('#loggin').attr('action', './admin.html?status=login');
    // $('#addMember').attr('action', './memberList.php?status=add');
    $('#formBlur').show();
}
function bookingForm() {



    $('#toolsBlur').click();
    $('.formBox1').show();
    //  $('#booking').attr('action', './index.php?status=day');
    // $('#addMember').attr('action', './memberList.php?status=add');
    $('#formBlur').show();
    // $('#timing').css("disblay","block");
}

function orderForm() {
    if ($('#phone').val() != 0) {
        $('.formBox1').hide();
        // $('#toolsBlur').click();
        // $('.formBox3').show();
        // $('#booking').attr('action', './admin.html?status=login');
        // $('#addMember').attr('action', './memberList.php?status=add');
        $('#formBlur').hide();
    }
}

function clockForm() {

    //  $('#timing').css('display', "block");
    $('#toolsBlur').click();
    $('.formBox4').show();
    // $('#booking').attr('action', './admin.html?status=login');
    // $('#addMember').attr('action', './memberList.php?status=add');
    $('#formBlur').show();

}


function callAjax() {
    // alert( $("input:tel").val());
    // console.log( $("#phone").val());
    $.ajax({
        type: "POST",
        url: "index.php",
        data: { phone: $("input:tel").val() },
        cache: true,

    });
}









function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

$(document).ready(function () {



    $('#formBlur').click(function () {
        $('#formBlur').hide();
        $('.formBox').each(function () {
            $(this).hide();
        });

    });
    $('.cancelForm').each(function () {
        $(this).click(function () {
            $('#formBlur').click();
        });
    });

    $('#loginn').click(logginForm);
    $('#boking').click(bookingForm);
    $('#back-arrow').click(function () {


        $("#back_arrow").submit();
    });
    $('.buton').click(function () {
        clockForm();
        // $(this).
    });
    // $('.days_click').click(function () {

    //     // $("input[type=submit]").attr("clicked", "true");

    //     $('.buton').click(function () {


    //         $(this).click(function () {
    //             $("#timing").click();
    //         });
    //     });

    // });
    $(".day_week").click(function () {
        // console.log($(".day_week").val());
        $(this).click(function () {
            $("#timing").submit();
        });

    });
    if ((getParameterByName('state') == 'day' || getParameterByName('state') == 'time') && $('.hid1').val() == 1) {
        $('#formBlur').show();


    }
    if ((getParameterByName('state') == 'signup')) {

        // $('#toolsBlur').click();
        $('.formBox1').show();

        $('#formBlur').show()
        $("#booking").attr('action', './index.php?state=signupp');
    }

});