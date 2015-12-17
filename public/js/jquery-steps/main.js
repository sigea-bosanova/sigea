$( document ).ready(function() {
    $('#register').validate({
        debug: false,
        rules: {
            "name": {
                required: true
            },
            "surname": {
                required: true
            },
            "surname2": {
                required: true
            },
            "email": {
                required: true,
                email: true
            },
            "cpostal": {
                required: true,
                number:true,
                minlength: 5,
                maxlength: 5
            }
        },
        messages: {
            "name": {
                required: "Introduce tu nombre."
            },
            "surname": {
                required: "Apellido obligatorio."
            },
            "surname2": {
                required: "Apellido obligatorio."
            },
            "email": {
                required: "Introduce tu correo.",
                email: "Correo No valido"
            },
            "cpostal": {
                required: "Introduce tu c�digo postal.",
                number: "Introduce un c�digo postal v�lido.",
                maxlength: "Debe contener 5 d�gitos.",
                minlength: "Debe contener 5 d�gitos."
            }
        }

    });
});