<?php
class ClienteService
{
  public static function informaInadimplentes($mailer)
  {
    $inadimplentes = Cliente::getInadimplentes();

    foreach ($inadimplentes as $cliente) {
      $mailer->addAddres($cliente->email);
      $mailer->setTextBody("{$cliente->nome} está inadimplente");
      $mailer->send();
    }
  }
}

ClienteService::informaInadimplentes(new OldEmailService);
ClienteService::informaInadimplentes(new PHPMailerAdapter);
