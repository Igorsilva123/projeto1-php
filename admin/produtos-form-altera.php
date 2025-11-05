    <?php

    require_once("config.inc.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM produtos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    
    if($dados = mysqli_fetch_array($resultado)){
        $id = $dados['id'];
        $nome = $dados['nome'];
        $valor = $dados['valor'];
        $quantidade = $dados['quantidade'];
    }

?>

<h1>Alteração de Produto</h1>
<form action="?pg=produtos-altera" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Produto</label>
    <input type="text" name="nome" value="<?=$nome?>"><br>
    <label>Valor</label>
    <input type="text" name="valor" value="<?=$valor?>"><br>
    <label>Quantidade</label>
    <input type="text" name="quantidade" value="<?=$quantidade?>"><br>

    <input type="submit" value="Alterar">
</form>