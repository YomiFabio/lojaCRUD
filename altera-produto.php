<?php require_once("cabecalho.php"); ?>
<?php require_once('conecta.php');?>
<?php require_once ("banco-produtos.php");?>
<?php
$id = $_POST['id'];
$nome =  $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado',$_POST)){
    $usado = true;
} else {
    $usado = false;
}




if (alteraProduto($conexao,$id, $nome, $preco, $descricao, $categoria_id, $usado)) {
?>

    <p class="text-success text-center m-5">
        O produto <?= $nome ?>, <?= $preco ?> foi alterado!
    </p>
<?php
} else {
    $msg = mysqli_error($conexao); ?>

    <p class="text-danger text-center m-5">
        O produto <?= $nome ?> não foi alterado: <br> <?= $msg ?>
    </p>
<?php

}
mysqli_close($conexao)
?>

<?php include("rodape.php"); ?>