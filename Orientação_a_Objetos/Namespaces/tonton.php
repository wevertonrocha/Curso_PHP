<?php
// Nesta linha, estamos importando a classe TontoniKroos do namespace App
use App\TontoniKroos;
// Nesta linha, é feita a inclusão do autoload do Composer
require 'vendor/autoload.php';
// Aqui, estamos criando uma nova instância da classe TontoniKroos
$tonton = new TontoniKroos();
var_dump($tonton);


