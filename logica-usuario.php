<?php

session_start();
function usuarioEstaLogado()
{
    return isset($_SESSION["usuario_logado"]);
}


function usuarioLogado()
{
    return $_SESSION["usuario_logado"];
}
function verificaUsuario()
{
    if (!isset($_SESSION["usuario_logado"])) {
        $_SESSION["danger"] = "Você não tem acesso à esta funcionalidade";
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    }
}

function logaUsuario($email)
{
    $_SESSION["usuario_logado"] = $email;
}

function logout()
{
    session_destroy();
    session_start();
}