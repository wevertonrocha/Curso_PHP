<?php
// Nesta linha, estamos importando a classe TontoniKroos do namespace App
use App\TontoniKroos;
// Nesta linha, é feita a inclusão do autoload do Composer
require 'vendor/autoload.php';
// Aqui, estamos criando uma nova instância da classe TontoniKroos
$tonton = new TontoniKroos();
// Aqui, estamos exibindo informações sobre o objeto criado
var_dump($tonton);


