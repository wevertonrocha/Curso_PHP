<?php

require_once 'src/Venda.php';

$venda = new App\Venda("2025-10-01", "Arroz", 2, 100.0);
echo $venda->exibirDados();
