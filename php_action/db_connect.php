<?php 
// CONEXÃO COM BANCO DE DADOS Con
$servername = "";
$username = "";
$password = "";
$db_name = "";

$connect = mysqli_connect($servername,$username,$password,$db_name);
mysqli_set_charset($connect, "utf-8");

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;
