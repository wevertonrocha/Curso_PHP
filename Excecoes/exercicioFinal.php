<?php 

function divisao($divisor, $dividendo){
    if ($dividendo == 0 || $divisor ==0) {
        throw new Exception("Divisão por zero não é permitida.");
    }
    return $dividendo / $divisor;
}

try {
    echo divisao(2, 10) . "\n";
    // echo divisao(10, 0) . "\n";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "\n";
} finally {
    echo "Execução finalizada.\n";
}