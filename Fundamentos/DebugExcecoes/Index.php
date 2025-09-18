<?php
function divisao($divisor, $dividendo)
{
    try {
    if($divisor ==0 )
    {
        throw new RangeException("Divisão por zero não é permitida");
    }

    $resultado = $dividendo / $divisor;

    echo "Resultado: $resultado";
    } catch(Exception) {
        // echo "Erro: " . $e->getMessage();
        echo "Erro: Divisão por zero não é permitida";
    } finally {
        echo "<br>Operação finalizada";
    }
}

divisao(0, 10);

?>