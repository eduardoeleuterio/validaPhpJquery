<?php
    $nome =$_POST["nome"];
    $sobrenome =$_POST["sobrenome"];
    $email= $_POST["email"];
    $matricula= $_POST["matricula"];
    $usuario= $_POST["usuario"];
    $senha= $_POST["senha"];
    $coSenha =$_POST["cosenha"];

    if($nome =="" or $sobrenome =="" or $email =="" or $matricula =="" or $usuario =="" or $senha =="" or $coSenha ==""){
        $resposta["status"] = "n";
        $resposta["mensagem"] ="Preencha todos os campos";
    }
    else{
        $resposta["status"] = "s";
        $resposta["mensagem"] ="Salvo com sucesso";
    }
    $resposta_json = json_encode($resposta);
    echo  $resposta_json;
?>