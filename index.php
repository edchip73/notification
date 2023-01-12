<?php

require __DIR__ . '/lib_ext/autoload.php';
use Notification\Email;

$novoEmail = new  Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um email de <b>Teste</b></p>","eduardo@luknet.com.br", "Eduardo","edchip73@gmail.com", "Eduardo");

var_dump($novoEmail);
