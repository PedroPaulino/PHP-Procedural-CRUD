<?php
// CONEXÃO
include_once "./php_action/db_connect.php";
// HEADER
include_once "./includes/header.php";
// MESAGE
include_once "./includes/message.php";

?>

<div class="row">

    <!-- Smartphone = 12 // Tablet = 6 // Push para centralizar -->
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Funcionários </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Chapa: </th>
                    <th>Departamento: </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM funcionarios";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) > 0):
                    while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['chapa']; ?></td>
                        <td><?php echo $dados['departamento']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                        <!-- Modal Structure -->
                        <div id="modal<?php echo $dados['id']; ?>" class="modal">
                            <div class="modal-content">
                                <h4> Atenção <i class="material-icons">report</i></h4>
                                <p>Tem certeza que deseja excluir esse funcionario ?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="php_action/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <button type="submit" name="btn-deletar" class="btn red"> Deletar </button>

                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>

                                </form>
                            </div>
                        </div>
                    </tr>
                <?php
                    endwhile;
                    else:?>

                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn green">Adicionar funcionario</a>
    </div>
</div>



<?php
// FOOTER
include_once "./includes/footer.php";
?>
