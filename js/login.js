$('#btn_iniciar_sesion').click(function(){
    var $ci = $('#ci_user').val();
    console.log("Iniciando sesion");
    $params = {'ci':$ci};
    $.ajax({
        url: './php/services/login.php',
        type: 'POST',
        data: $params,
        dataType: 'json',
        beforeSend: function(){
            console.log("asdasdas");
        },
        success: function(response){
            //console.log(data.response);
            if(response.status){
                window.location.href = "menu_principal.php";
            }else{
                if(response.code == 1 || response.code == 2){
                    console.log("Ci no registrado");
                    $input_validation = $('#input_validation');
                    $input_validation.text(response.message);
                    $input_validation.show();
                    setTimeout(function(){
                        $input_validation.hide();
                        $input_validation.text('');
                    },5000);
                }
            }
        },
        error: function(error){
            console.log(error);
        },
        complete: function(){
            console.log("completado");
        }
    });
});
$('#btn_registrar_usuario').click(function(){
    console.log("Registrar Usuario");
});

/* MIS ESTADOS CON DIOS
1. Solicitud de Amistad
2. Publicaciones
3. Historia
4. Comentarios
5. Reacciones
6. Amigos en común
7. Messenger
8. Cerrar Sesion
9. Etiquetar
10. Bloquear
*/
