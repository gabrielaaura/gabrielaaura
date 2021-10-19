<?php

//Se possivel, melhor a questao da invalidação (por exemplo usuario nao cadastrado, senha incorreta)

session_start();

include_once("conexao.php");
// die($_POST);


//O campo usuário e senha preenchido entra no if para validar
if ((isset($_POST['CadEmail'])) && (isset($_POST['CadSenha']))) {
    $usuario = mysqli_real_escape_string($conn, $_POST['CadEmail']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    $senha = mysqli_real_escape_string($conn, $_POST['CadSenha']);
    //$senha = md5($senha); Caso criptografar a senha 

    //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
    $result_usuario = "SELECT * FROM loginvoluntario WHERE 'CadEmail' = " . $cadEmail . " and 'CadSenha' = " . $cadSenha . " LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    // die(mysqli_error());
    $resultado = mysqli_fetch_assoc($resultado_usuario);


    $result_registro = "SELECT * FROM cadastrovoluntario WHERE 'CadEmail' = " . $cadEmail . " and 'CadSenha' = " . $cadSenha . " LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado_regis = mysqli_fetch_assoc($resultado_registro);

    //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    if (isset($resultado)) {

        //Informações da Instituição
        $_SESSION['emailv'] = $resultado_regis['CadEmail'];
        $_SESSION['senhav'] = $resultado_regis['CadSenha'];


        $_SESSION['usuarioEmail'] = $resultado['CadEmail'];
        header("Location: home.html");
    }
    //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
    //redireciona o usuario para a página de login
    else {
        //Váriavel global recebendo a mensagem de erro
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: perfil.html");
    }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
} else {
    $_SESSION['loginErro'] = "Tudo errado";
    header("Location: cadastro.php");
    echo "<script>console.log({$result_usuario})</script>";
}
