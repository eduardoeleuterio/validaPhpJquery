var prop = 0;
function enviar(){
    $.ajax({
        type: "POST",
        dataType: "json",
        url:"php/enviar.php",
        data:{
            nome: $("#nome").val(),
            sobrenome: $("#sobrenome").val(),
            email: $("#email").val(),
            matricula: $("#matricula").val(),
            usuario: $("#usuario").val(),
            senha: $("#senha").val(),
            cosenha:$("#cosenha").val()
        },
        success:function(resposta){
            if(resposta.status =="s"){
                alert(resposta.mensagem);
                indow.location.href = "http://localhost/Eduardo%20Rebelo%20Eleuterio/SistemaWeb/principal.html";
            }
            else{
                alert(resposta.mensagem);
                w
            }
        }
    });
}
