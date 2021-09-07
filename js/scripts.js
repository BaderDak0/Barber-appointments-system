function logginForm() {

    console.log("hello");
    $('#toolsBlur').click();
    $(':input[name="memberEmail"]').prop('disabled', false);;
    $('.formBox').show();
    $('#loggin').attr('action', './admin.html?status=login');
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
    
    
    
    $('#loginn').click(logginForm);
    $('#formBlur').click(function () {
        $('#formBlur').hide();
        $('.formBox').each(function () {
            $(this).hide();
        });
        $('.listItem .edit').hide();
        $('.listItem .trash').hide();
    });
    $('.cancelForm').each(function () {
        $(this).click(function () {
            $('#formBlur').click();
        });
    });




});