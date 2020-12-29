<?php

$this->form = new FormWrapper(new Form('form_contato'));
$this->form->setTitle('Formulário de Contato');

$nome = new Entity('nome');
$email = new Entity('email');
$assunto = new Combo('assunto');
$mensagem = new Text('mensagem');

$this->form->addField('Nome', $nome, 300);
$this->form->addField('Email', $email, 300);
$this->form->addField('Assunto', $assunto, 300);
$this->form->addField('Mensagem', $mensagem, 300);

$this->form->addAction('Enviar', new Action([$this, 'onSend']));

$data = $this->form->getData();

$data = new stdClass();
$data->email = '';
$data->nome = '';
$this->form->setData($data);
