$( document ).ready(function(){
    $('#profileForm').validate({
        debug: false,
        rules: {
            "username": {
                required: true
            },
            "password": {
                required: true,
                min: 4
            },
            "repassword": {
                required: true,
                min: 4,
                equalTo: "#password"
            },
            "email": {
                required: true,
                email: true
            }

        },
        messages: {
            "username": {
                required: "Introduce tu username."
            },
            "password": {
                required: "Campo Contrase�a Obligatorio.",
                min : "introcuce mas de 4 digitos "
            },
            "repassword": {
                required: "Campo Re Contrase�a Obligatorio.",
                min : "introcuce mas de 4 digitos "
            },
            "email": {
                required: "Introduce tu correo.",
                email: "Correo No valido"
            }

        }

    });


});