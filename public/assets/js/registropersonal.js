$(document).ready(function() {
    $('#registro').click(function() {
        var datosresgis = $('#registroajax').serialize();



        if (datosresgis != "documento=&nombres=&apellidos=&edad=&sexo=&numero=&observaciones=") {

            $.ajax({
                type: "POST",
                url: "create.php",
                data: datosresgis,
                success: function(r) {
                    if (r) {

                        swal("Buen trabajo!", "Se registro correctamente", "success");

                        document.getElementsByName("documento")[0].value = "";
                        document.getElementsByName("nombres")[0].value = "";
                        document.getElementsByName("apellidos")[0].value = "";
                        document.getElementsByName("edad")[0].value = "";
                        document.getElementsByName("sexo")[0].value = "";
                        document.getElementsByName("numero")[0].value = "";
                        document.getElementsByName("observaciones")[0].value = "";
                        document.getElementsByName("nompapa")[0].value = "";
                        document.getElementsByName("nommama")[0].value = "";
                        document.getElementsByName("nomcolegio")[0].value = "";
                        document.getElementsByName("direccion")[0].value = "";
                        document.getElementsByName("correo")[0].value = "";
                        document.getElementsByName("numero")[0].value = "";
                        document.getElementsByName("eps")[0].value = "";
                        document.getElementsByName("acudiente")[0].value = "";
                        document.getElementsByName("curso")[0].value = "";
                        document.getElementsByName("numcelular")[0].value = "";
                        document.getElementsByName("numemergencia")[0].value = "";
                        document.getElementsByName("jornada")[0].value = "";
                        document.getElementsByName("gruposanguinee")[0].value = "";
                        document.getElementsByName("programa")[0].value = "";

                        setTimeout(function() {

                            location.href = "form-basic.php";

                        }, 3000);

                    } else {

                        swal("OPS!", "Algo anda mal", "error");
                    }

                }

            });


        } else {
            swal("OPS!", "Algo anda mal", "error");

        }




        return false;
    });

});