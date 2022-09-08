$(document).reaty(function (){
    $("#flexSwitchCheck").click(function(){
        $.ajax({
            url: "nivelAcesso.php",
            type: "POST",
            data: {
                id_professor: $("#id_professor").val(),
                diarios: $("#diarios").val()
            },
            success: function(resultado) {
                $("#saida").html(resultado);
            }
        });
    });
});