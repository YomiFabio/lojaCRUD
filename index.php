<?php require_once("cabecalho.php"); ?>
<?php require_once("logica-usuario.php");?> 


<h1>Bem vindo!</h1>

    <?php if (usuarioEstaLogado()) { ?>
        <p class="text-success">Você está logado como <?= usuarioLogado()?>. <a href="logout.php">Deslogar</a> </p>

    <?php
}?>
    <?php if (!isset($_SESSION["usuario_logado"])) { ?>
<h2>login</h2>
<form action="login.php" method="post">
    <table class="table">
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="" class="form-control"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="password" name="senha" id="" class="form-control"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">Login</button></td>
        </tr>
    </table>
</form>
<?php }?>
<?php include("rodape.php"); ?>