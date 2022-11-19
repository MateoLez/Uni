$(document).ready(function() {
    $('#btnguardar').click(function() {
        var datos2 = $('#formajax').serialize();

        $.ajax({
            type: "POST",
            url: "html/registrar.php",
            data: datos2,
            success: function(r) {
                if (r) {

                    swal("Buen trabajo!", "Se registro correctamente", "success");
                    document.getElementsByClassName("user2")[0].value = "";
                    document.getElementsByClassName("pass2")[0].value = "";
                    document.getElementsByClassName("mail")[0].value = "";

                } else {
                    swal("OPS!", "Algo anda mal", "error");
                }

            }

        });

        return false;
    });

});