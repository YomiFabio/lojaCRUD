<?php require_once('cabecalho.php') ?>
<?php require_once('banco-produtos.php'); ?>
<?php require_once('conecta.php');

$produtos =
listaProdutos($conexao);
?>


<table class="table table-striped table-bordered">
    <?php
    foreach ($produtos as $produto) :
    ?>
    <tr>
        <td><?= $produto['nome']?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= substr($produto['descricao'], 0, 40) ?></td>
        <td><?=$produto['categoria_nome']?></td>
        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
        <td>
            <form action="remove-produto.php" method="POST">
            <input type="hidden" name="id" value=<?=$produto['id']?>>
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php 
    endforeach
    ?>
</table>
<?php include('rodape.php') ?>