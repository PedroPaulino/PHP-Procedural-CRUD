<?php
// CONEXÃO
include_once "./php_action/db_connect.php";

// HEADER
include_once "./includes/header.php";

//SELECT
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM funcionarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    
endif;
?>

<div class="row">
    
    <!-- Smartphone = 12 // Tablet = 6 // Push para centralizar -->
    <div class="col s12 m6 push-m3">
      <h3 class="light">Editar Funcionário</h3>
      
      <form action="php_action/update.php" method="POST">
        <!-- ID do funcionário -->
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

        <div class="input-field col s12 ">
            <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
            <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
            <label for="sobrenome">Sobrenome</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="chapa" id="chapa" value="<?php echo $dados['chapa']; ?>">
            <label for="chapa">Chapa</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="departamento" id="departamento" value="<?php echo $dados['departamento']; ?>">
            <label for="departamento">Departamento</label>
        </div>

        <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
        <a href="index.php" class="btn green"> Lista de Funcionarios </a>

      </form>
    </div>
</div>



<?php
// FOOTER
include_once "./includes/footer.php";
?>