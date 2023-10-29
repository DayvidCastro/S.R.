<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimento online ADM</title>
    <link rel="stylesheet" href="requerimento.css">
</head>

<center>

<body class="fundo">


    <div class="sub_cabecalho">

    <h1 class="sub_titulo">Requerimento Online (ADM)</h1>

    </div>


    <div class="div_opcao">
        <form class="" action="" method="post">
            
            <button class="opcao" name="ir_para_suap">Ir Para SUAP</button>

            <button class="opcao" name="enviar_requerimento">Ver requerimento</button>
            
            <button class="opcao" name="cadastrar_novo_adm">Cadastrar novo ADM</button>

            <button class="opcao" name="sair">Sair</button>
                
        </form>

    </div>

<?php

if (isset($_POST['sair'])) {

    header('Location: pagina_login.php');

}

    extract($_POST);


if (isset($ir_para_suap)) {

    $url = "https://suap.ifba.edu.br/accounts/login/?next=/";
    echo "<script> window.open('$url'); </script>";
    exit;

}


if (isset($cadastrar_novo_adm)) {

    header('Location: cadastro_adm.php');
        

}

if (isset($status_requerimento)) {

        

}

?>


</body>

</center>

</html>