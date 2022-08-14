<?php
// SESSÃO
session_start();
// CONEXÃO
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $chapa = mysqli_escape_string($connect, $_POST['chapa']);
    $departamento = mysqli_escape_string($connect, $_POST['departamento']);

    $sql = "UPDATE funcionarios SET nome = '$nome', sobrenome = '$sobrenome', chapa = '$chapa', departamento = '$departamento' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";

        header('Location: ../index.php');
    endif;

endif;
?>