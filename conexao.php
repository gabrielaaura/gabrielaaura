<?php

$servidor='localhost';
$usuario='root';
$senha='';
$dbname='sitetcc'; //nome da sua base de dados

$conn=mysqli_connect($servidor, $usuario, $senha, $dbname);

if(mysqli_connect_error()):
  echo "Falha na conexão: ". mysqli_connect_error();
endif;

?>