$(function() {
    $('#error').empty();
});

$(document).on('submit', '#register', function(e) {
    e.preventDefault();

    $.ajax({
        url: 'register.php',
        type: 'POST',
        data: readFormData($(this)),
        success: function(result){
            showUser(JSON.parse(result));
        },
        error: function(xhr){
            $('#error').empty();
            $('#error').append(`<small class='text-danger'>${msg}</small><br>`);
        }
    });
});

$(document).on('keyup', '#confirmPassword', function() {
    let password = $('#password').val();
    let confPassword = $(this).val();

    if((password.length === confPassword.length) && !(password === confPassword)){
        $('#confirmPassword').css('border-color', '#dc3545');
        $('#confirmPassword').css('box-shadow', "0 0 0 0.25rem rgb(225 83 97 / 50%)");
        $('#btn-register').prop('disabled', true);
    }else{
        $('#confirmPassword').css('border-color', '#86b7fe');
        $('#confirmPassword').css('box-shadow', "0 0 0 0.25rem rgb(13 110 253 / 25%)");
        $('#btn-register').prop('disabled', false);
    }
});