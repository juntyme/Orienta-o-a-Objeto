<?php

use app\classes\UploadFoto;

require_once('app/classes/Pessoa.php');
require_once('app/classes/UploadFoto.php');
require_once('app/classes/AtividadesPessoa.php');


$upload = new UploadFoto;
$upload->file('foto.png');
$upload->extension();
$upload->rename();
echo $upload->upload();

// $atividadesPessoa = new AtividadesPessoa;
// echo $atividadesPessoa->pular();


// $pessoa = new Pessoa;
// $pessoa->idade = 35;
// $pessoa->nome = "Alexandre";
// $pessoa->email = "contato@devclass.com.br";

// echo $pessoa->dados();
