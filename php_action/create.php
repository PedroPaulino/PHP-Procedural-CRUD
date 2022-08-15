<?php
// SESSÃO
session_start();
// CONEXÃO
require_once 'db_connect.php';

// PROTEGENDO CONTRA XSS CROSS SITE SCRIPTING E SQL INJECTION
function clear($input) {
    global $connect;
    //sql
    $clearsql = mysqli_escape_string($connect, $input);
    //xss
    $clearxss = htmlspecialchars($clearsql);

    return $clearxss;

}
if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $chapa = mysqli_escape_string($connect, $_POST['chapa']);
    $departamento = mysqli_escape_string($connect, $_POST['departamento']);

    $sql = "INSERT INTO funcionarios (nome, sobrenome, chapa, departamento) VALUES ('$nome', '$sobrenome', '$chapa', '$departamento')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";

        header('Location: ../index.php');
    endif;

endif;
?>
