<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE produtos SET
            nome = '$nome',
            valor = '$valor',
            quantidade = '$quantidade'
            WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Dados atualizados com sucesso</h2>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao atualizar os dados</h2>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }
