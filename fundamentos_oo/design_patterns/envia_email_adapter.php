<?php

require_once 'PHPMailer.php';
require_once './classes/PHPMailerAdapter.php';
$mail = new PHPMailerAdapter;

$mail->setFrom('teste@teste.com.br', 'Teste');
$mail->addAddress('destinatario@teste.com.br', 'Teste');
$mail->setSubject('Teste');
$mail->setTextBody('Teste Adapter');

$mail->send();
