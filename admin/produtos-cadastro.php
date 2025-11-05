<?php 

    require_once "config.inc.php";

    $nome = $_REQUEST['nome'];
    $valor = $_REQUEST['valor'];
    $quantidade = $_REQUEST['quantidade'];

    $sql = "INSERT INTO produtos (nome, valor, quantidade) 
            VALUES ('$nome','$valor','$quantidade')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Produtos cadastrado com sucesso</h2>";
    }else{
        echo "<h2>Erro ao cadastrar um produto</h2>";
    }

    mysqli_close($conexao)
?>


