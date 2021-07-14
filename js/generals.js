function readFormData(form){
    let data = {};
    
    form.find("input").each(function (){
        data[this.name] = $(this).val();
    });
    
    return data;
}

function showUser(data){
    console.log(data);
    $('#register').toggle();
    $('#user-register').toggle();
    $('#user-register #user-name').append(`<p>${data.name} ${data.lastname}</p>`);
    $('#user-register #user-phone').append(`<p>${data.phone}</p>`);
    $('#user-register #user-email').append(`<p>${data.email}</p>`);
}