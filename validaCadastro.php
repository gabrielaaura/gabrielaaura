<?php
sleep(20);
include_once('conexao.php');
$cadNome = $_POST['CadNome'];
$cadEmail = $_POST['CadEmail'];
$cadSenha = $_POST['CadSenha'];

$resultado = "INSERT into cadastrovoluntario (CadNome, CadEmail, CadSenha) values('$cadNome', '$cadEmail', '$cadSenha')";
$resultado2 = "INSERT INTO loginvoluntario (CadEmail, CadSenha) values('$cadEmail', '$cadSenha')";

$final = mysqli_query($conn, $resultado);
$final2 = mysqli_query($conn, $resultado2);
