<?php
## Local onde roda o php
$hostname = 'localhost';
## Nome de usuári oque tem acesso
$username = 'fipe_user';
## Senha do usuario do banco
$senha = '12345678';
## Banco de dados desejado
$banco = 'fipe';
## Abre uma conexão com o servidor mysql
$db = mysqli_connect($hostname, $username, $senha, $banco);
## Seleciona um banco de dados MySql - ordem trocada na versão mais nova
mysqli_select_db($db,$banco);

if($banco && $db == true){
    echo "Banco ok";
  }
?>