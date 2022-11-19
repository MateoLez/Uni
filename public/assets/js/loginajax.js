$(document).ready(function() {
    $('#btnguardar2').click(function() {
        var datos = $('#loginform').serialize();



        $.ajax({
            type: "POST",
            url: "html/ingresarlog.php",
            data: datos,
            success: function(r) {
                if (r) {

                    location.href = "html/index.php";

                } else {
                    swal("OPS!", "Datos incorrectos", "error");
                }
            }

        });

        return false;

    });

});