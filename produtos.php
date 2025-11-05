<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao,$sql);

?>
<div class="container mt-3">
    <h2>Lista de Produtos</h2>
    <p>Todos os produtos da empresa no momento</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Quantidade</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($dados = mysqli_fetch_array($resultado)){
        ?>

        <tr>
            <td><?=$dados['nome']?></td>
            <td><?=$dados['valor']?></td>
            <td><?=$dados['quantidade']?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>