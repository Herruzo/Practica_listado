function muestraVal() {
    $("#texto").val($("#querys option:selected").val());
};

$(document).ready(function() {
    $('#contenido').fadeOut();
    $('#boton').click(function() {
        $('#contenido').fadeIn();
        $('#contenido').load("main.php", { consulta: $("#texto").val() });
        return false;
    });
});