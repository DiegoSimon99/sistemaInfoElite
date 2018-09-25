$(document).ready(function () {
    $("#formulario_login").submit(function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            url: "controlador/validarLogin.php",
            type: "post",
            data: datos
        }).done(function (respuesta) {
            if (respuesta == 1) {
                location.href = "vista/menuPrincipal.php";
            } else {
                $("#respuesta").css({"display": "block"});
                $("#respuesta").html('<center>Verifique sus datos</center>');
            }
        });
    });
});