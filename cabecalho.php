<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>
<html>

<head>
    <meta charset="utf-8">
    <title>Minha Loja</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/loja.css">
</head>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">
                Minha Loja
            </a>
        </div>
        <div>
            <ul class="nav navbar-light bg-light navbar-expand-lg">
                <li><a class="nav-item nav-link" href="produto-formulario.php">Adiciona Produto</a></li>
                <li><a class="nav-item nav-link" href="produto-lista.php">Produtos</a></li>
                <li><a class="nav-item nav-link" href="contato.php">Contato</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="principal">

    <?php
mostraAlerta("success");
mostraAlerta("danger");
?>
