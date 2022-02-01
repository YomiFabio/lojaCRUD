<?php require_once("cabecalho.php"); ?>
 <form action="envia-contato.php" method="post">

    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" id="" class="form-control"></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" name="email" id="" class="form-control"></td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td><textarea name="mensagem" id="" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">Enviar</button></td>
        </tr>
    </table>

 </form>