$(document).ready(function(){
    $('form').submit(fnConfiguraCubo);
    $('#reset-cube').on('click',fnResetCubo);
    $('#btn-insert-command').on('click',fnInsertComando);
});


function fnConfiguraCubo(){
    var dataConfig = $('#form-config').serialize();
    var url = '/cubo/inicia';
    peticionApi('post',url,dataConfig)
        .done(function(dataResult){
            if(dataResult.status){
                $('.command-container-cubo').removeClass('hide');
                $('.form-container-cubo').addClass('hide');
                imprimeConsola(dataResult.msg);
            }
        });
    return false;
}

function fnInsertComando(){
    if($('#comando').val().length >0){
        var comando = $('#comando').val().split(" ");
        switch (comando[0].toUpperCase()) {
            case "UPDATE":
                if (comando.length != 5) {
                    return swal("Error", "Error en el comando UPDATE", "error");
                }
                var dataCubo = 'x='+comando[1]+'&y='+comando[2]+'&z='+comando[3]+'&W='+comando[4];
                var url = '/cubo/update';
                peticionApi('post',url,dataCubo)
                    .done(function(dataResult){
                        if(dataResult.status){
                            imprimeConsola(dataResult.msg);
                        }
                        else{
                            return swal("Error", dataResult.msg, "error");
                        }
                    });
                break;
            case "QUERY":
                if (comando.length != 7) {
                    return swal("Error", "Error en el comando QUERY", "error");
                }
                var dataCubo = 'x1='+comando[1]+'&y1='+comando[2]+'&z1='+comando[3]+'&x2='+comando[4]+'&y2='+comando[5]+'&z2='+comando[6];
                var url = '/cubo/query';
                peticionApi('post',url,dataCubo)
                    .done(function(dataResult){
                        if(dataResult.status){
                            imprimeConsola(dataResult.data);
                        }
                        else{
                            return swal("Error", dataResult.msg, "error");
                        }
                    });
                break;
        }

        $('#comando').val('');
    }
}

function fnResetCubo(){
    $('.command-container-cubo').addClass('hide');
    $('.form-container-cubo').removeClass('hide');
    $('#comandos-cont').html('');
    $('.input-form').val('');
}

function peticionApi(metodo,url,parametros) {
    var opcionesAjax ={
        type: metodo,
        url: url,
        dataType: "json"
    };
    if((typeof parametros != 'undefined') || (parametros != false)){
        opcionesAjax.data = parametros;
    };
    return $.ajax(opcionesAjax);
}

function imprimeConsola(mensaje){
    var html = '<div class="comando-result"><span class="glyphicon glyphicon-chevron-right"> </span> '+mensaje+'</span></div>';
    $('#comandos-cont').prepend(html);
}