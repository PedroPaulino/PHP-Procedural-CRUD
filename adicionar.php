<?php
// HEADER
include_once "./includes/header.php";
?>

<div class="row">
    
    <!-- Smartphone = 12 // Tablet = 6 // Push para centralizar -->
    <div class="col s12 m6 push-m3">
      <h3 class="light">Novo Funcionario</h3>
      
      <form action="php_action/create.php" method="POST">
        <div class="input-field col s12 ">
            <input type="text" name="nome" id="nome">
            <label for="nome">Nome</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenome">
            <label for="sobrenome">Sobrenome</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="chapa" id="chapa">
            <label for="chapa">Chapa</label>
        </div>

        <div class="input-field col s12">
            <input type="text" name="departamento" id="departamento">
            <label for="departamento">Departamento</label>
        </div>

        <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
        <a href="index.php" class="btn green"> Lista de Funcionarios </a>

      </form>
    </div>
</div>



<?php
// FOOTER
include_once "./includes/footer.php";
?>