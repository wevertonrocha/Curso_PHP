<?php

function validaUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception("Dados do usuário incompletos");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 30 // Idade está faltando
];

try {
    $status = validaUsuario($usuario);
} catch (Exception $e) {
    echo "<br> ...Erro: " . $e->getMessage() . "<br>";
    
}
finally {
    echo "<br> ... Execução finalizada.";
}