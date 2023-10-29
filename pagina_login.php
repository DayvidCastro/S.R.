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
    <div class="form">
        <h1 class="titulo">Requerimento</h1>
        <form class="input" action="" method="post">
            <input class="input" type="text" name="email" placeholder="email">
            <input class="input" type="password" name="senha" placeholder="senha">
            <button class="login" name="login">Login</button>
            <button class="login" name="cadastro">Cadastro</button>
            <a href="" class="esqueci_senha">Esqueci a senha</a>
        </form>
    </div>

    <?php
    extract($_POST);

    if (isset($login)) {
            
        include_once("configuracao.php");

        $query = "SELECT * FROM adms WHERE email = '$email'";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado) {

            $linha = mysqli_fetch_assoc($resultado);

            if ($linha) {
                
                if ($senha === $linha['senha']) {
                    
                    echo "Login bem-sucedido!";
                    header('Location: pagina_requerimento_adm.php');
                    exit();

                } else {

                    echo "<div style='font-size:25px; color:black; margin-top:20px;'>Senha incorreta<br></div>";
                }
            }
        }

        // Verificar a tabela de alunos da mesma maneira
        $query = "SELECT * FROM alunos WHERE email = '$email'";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado) {
            $linha = mysqli_fetch_assoc($resultado);

            if ($linha) {
                
                if ($senha === $linha['senha']) {
                    echo "Login bem-sucedido!";
                    header('Location: pagina_requerimento.php');
                    exit();
                } else {
                    echo "<div style='font-size:25px; color:black; margin-top:20px;'>Senha incorreta<br></div>";

                }
            }
        }
    }

    if (isset($cadastro)) {

        header('Location: pagina_cadastro.php');
        exit();

    }
    ?>
</body>
</center>
</html>
