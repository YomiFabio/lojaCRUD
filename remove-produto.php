<?php require_once("cabecalho.php");
 require_once ("banco-produtos.php");
 require_once ("logica-usuario.php");

$_SESSION["success"]= "Produto removido!";
$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();
?>