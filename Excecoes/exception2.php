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

$usuarioValido = validaUsuario($usuario);
if (!$usuarioValido) {
    echo"Dados do usuário incompletos";
    return false;
}

echo "\n ...Usuário válido. Pode prosseguir com a operação.\n";