        $(document).ready(function() {
            $('#enviarcorreo').click(function() {
                var datosresgis = $('#correoajax').serialize();

                $.ajax({
                    type: "POST",
                    url: "enviarcorreo.php",
                    data: datosresgis,
                    success: function(r) {
                        if (r) {

                            swal("Buen trabajo!", "Se envio correctamente", "success");

                        } else {
                            swal("OPS!", "Datos incorrectos", "error");
                        }
                    }

                });

                return false;
            });
        });