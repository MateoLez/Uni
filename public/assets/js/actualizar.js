$(document).ready(function() {
    $('#update').click(function() {


        document.getElementsByName("documento")[0].value = "";
        document.getElementsByName("nombres")[0].value = "";
        document.getElementsByName("apellidos")[0].value = "";
        document.getElementsByName("direccion")[0].value = "";
        document.getElementsByName("barrio")[0].value = "";
        document.getElementsByName("numero")[0].value = "";
        document.getElementsByName("observaciones")[0].value = "";


        return false;
    });

});