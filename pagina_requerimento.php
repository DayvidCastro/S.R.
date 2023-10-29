<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimento online</title>
    <link rel="stylesheet" href="requerimento.css">
</head>

<center>

<body class="fundo">


    <div class="sub_cabecalho">

    <h1 class="sub_titulo">Requerimento Online (ALUNOS)</h1>

    </div>


    <div class="div_opcao">
        <form class="" action="" method="post">
            
            <button class="opcao" name="ir_para_suap">Ir Para SUAP</button>

            <button class="opcao" name="enviar_requerimento">Enviar requerimento</button>
            
            <button class="opcao" name="meus_requerimentos">Meus requerimentos</button>

            <button class="opcao" name="voltar">Sair</button>
                
        </form>

    </div>


    <div class="form_pagina_main">

        <form class="input_pagina_main" action="" method="post">

            <input class="input" type="text" name="requerente" placeholder="requerente">
            <input class="input" type="text" name="endereco" placeholder="endereço">
            <input class="input" type="text" name="cidade" placeholder="cidade">
            <input class="input" type="email" name="email" placeholder="email">
            <input class="input" type="tel" name="telefone" placeholder="telefone">
            <input class="input" type="text" name="matricula" placeholder="matricula">
            <input class="input" type="text" name="campus" placeholder="campus">



            <select name="objeto_de_requerimento" class="input">

                <option value="1">Aproveitamento de estudo</option>
                <option value="2">Aproveitamento de experiencia anterior</option>
                <option value="3">Atividade domiciliar</option>
                <option value="4">Avaliaçao relatorio final</option>
                <option value="5">Contestaçao resultado</option>
                <option value="6">Desistencia do curso</option>
                <option value="7">Dispensa de ed.fisica</option>
                <option value="8">Justificativa de falta</option>
                <option value="9">Guia de transferencia</option>
                <option value="10">Reintegraçao</option>
                <option value="11">Revisao de avaliacao</option>
                <option value="12">Segunda chamada</option>
                <option value="13">Trancamento de matricula</option>
                <option value="14">Transferencia(especificar)</option>
                <option value="15">Matricula(especificar)</option>
           
            </select>
            
            <select name="turma" class="input" id="turmaSelect">
                <option value="EI">INFORMATICA</option>
                <option value="ED">EDIFICACOES</option>
                <option value="EMA">MEIO AMBIENTE</option>
            </select>

            <select name="curso" class="input" id="cursoSelect">
                <!-- Opções de cursos aqui -->
            </select>

            <script>
                // obtem referências aos elementos de seleção de turma e curso
                var turmaSelect = document.getElementById("turmaSelect");
                var cursoSelect = document.getElementById("cursoSelect");

                // elemento contendo cursos com base na turma
                var cursosPorTurma = {
                    "EI": ["EI-11", "EI-12", "EI-21", "EI-22", "EI-31", "EI-32", "EI-41"],
                    "ED": ["ED-11", "ED-12", "ED-21", "ED-22", "ED-31", "ED-32", "ED-41"],
                    "EMA": ["EMA-11", "EMA-12", "EMA-21", "EMA-22", "EMA-31", "EMA-32", "EMA-41"]
                };

                // Define um comportamento para quando a seleção da turma for alterada
                turmaSelect.addEventListener("change", function() {

                    // inseri o select de curso com as opções correspondentes à turma selecionada
                    cursoSelect.innerHTML = cursosPorTurma[turmaSelect.value]
                        .map(curso => `<option value="${curso}">${curso}</option>`)
                        .join('');
                });
            </script>



            <input class="input" type="date" name="data" placeholder="date">
            <input class="input" type="text" name="informacao_complementar" placeholder="Informaçao complementar">
            <input class="input" type="file" name="documento">
            <button class="login" name="enviar">Enviar</button>

        </form>

    

    </div>

<?php



extract($_POST);

if (isset($_POST['voltar'])) {

    header('Location: pagina_login.php');
    
}


if (isset($ir_para_suap)) {

    $url = "https://suap.ifba.edu.br/accounts/login/?next=/";
    echo "<script> window.open('$url'); </script>";
    exit;

}


if (isset($meus_requerimento)) {

        

}

if (isset($status_requerimento)) {

        

}

?>


</body>

</center>
</html>