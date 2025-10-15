<?php

function validaUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        return false;
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