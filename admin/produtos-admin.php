<?php

    require_once 'config.inc.php';

    echo "<h2>produtos</h2>";
?>
<a href="?pg=produtos-form">Cadastrar novo Produto</a>

<?php
    $sql = "SELECT * FROM produtos";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "<hr>";
            echo "Id: ".$dados['id'];
            echo " | Produto: ".$dados['nome'];
            echo " | Valor: ".$dados['valor'];
            echo " | Quantidade: ".$dados['quantidade'];
            echo " | <a href='?pg=produtos-form-altera&id=$dados[id]'>Editar</a>";
            echo " | <a href='?pg=produtos-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum cliente cadastrado!";
    }

    mysqli_close($conexao);

?>


