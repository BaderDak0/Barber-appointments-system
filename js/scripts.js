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
    // $('#booking').attr('action', './admin.html?status=login');
    // $('#addMember').attr('action', './memberList.php?status=add');
    $('#formBlur').show();
}

function toolsClick() {
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
        content.style.border = "none";
        content.style.maxHeight = null;
        $('#toolsBlur').css('display', 'none');
    } else {
        content.style.border = "solid 2px";
        content.style.borderTop = "none";
        content.style.maxHeight = content.scrollHeight + "px";
        $('#toolsBlur').css('display', 'block');
    }
}














$(document).ready(function(){
    
    
    
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



});