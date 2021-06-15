<?php


if(isset($_POST(['email']) && !empty($_POST(['email'])){

$nome = addslashes($_POST(['name']));
$email = addslashes($_POST(['email']));
$mensagem = addslashes($_POST(['menssagem']));

$to = "gridemtx@gmail.com";
$subjet = "Contato - Programador BR";
$body = "Nome: ".$nome. "\n"
        "Email: ".$email. "\n"
        "Mensagem: ".$mensagem;
$header = "From: gridemtx@gmail.com"."\r\n"
            ."Reply-To:".$email."\e\n"
            ."X=Mailer: PHP/".phpversion();
if(mail($to,$subjet,$body,$header)){

    echo("Email enviado com sucesso!");
}else{
    echo("O email não pode ser enviado")";"
}
}
?>