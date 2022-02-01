<?php
session_start();
$nome =$_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("class.phpmailer.php");

function email($para_email, $para_nome, $assunto,$html) {
    $mail2 = new PHPMailer();
    $mail2->IsSMTP();

    $mail2->From = "fabio.dev07@gmail.com";
    $mail2-> FromName = "test";

    $mail2->Host       = 'smtp.gmail.com';                     
    $mail2->SMTPAuth   = true;
    $mail2->SMTPSecure = "ssl";
    $mail2->Username   = 'fabio.dev07@gmail.com';                     
    $mail2->Password   = 'Gby*c4pr?25';                                        
    $mail2->Port       = 465;                                   

    $mail2->addAddress($para_email,$para_nome);

    $mail2->Subject = $assunto;


    $mail2->MsgHTML($html);
    if ($mail2->Send()){
        return "1";
    } else {
        return $mail2->ErrorInfo;
    }
}

$corpo_email = "<html><body> <p><article>Nova mensagem:</article> <br> De: {$nome}<br>E-mail: {$email}<br>Mensagem: {$mensagem} </p> </body></html>";

$controle = email("fapasdigital@gmail.com", "Fábio","teste",$corpo_email);

if($controle == "1"){
    header("Location: index.php");
    $_SESSION["success"] = "Mensagem enviada com sucesso!";
    die();
} else {
    header("Location: contato.php");
    $_SESSION["danger"] = "Mensagem não enviada!" . $controle;
    die();
}


