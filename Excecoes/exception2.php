<?php

/**
 * Função de validação que agora usa exceções para sinalizar erros.
 * @param array $usuario O array contendo os dados do usuário.
 * @return bool Retorna true se o usuário for válido.
 * @throws Exception Lança uma exceção formal se a validação falhar.
 */
function validaUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        // 'throw new Exception(...)' cria um objeto de erro e interrompe a função imediatamente.
        // O PHP agora procura um bloco 'catch' para lidar com este erro.
        // A responsabilidade de tratar o erro foi transferida da função para quem a chama.
        throw new Exception("Dados do usuário incompletos");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 30
];

// A função validaUsuario() é chamada. Como o 'nome' está vazio, ela vai lançar uma exceção.
// IMPORTANTE: Como não há um bloco try...catch aqui para "pegar" a exceção,
// o PHP irá parar a execução e mostrar um "Fatal error: Uncaught Exception...\".
$usuarioValido = validaUsuario($usuario);

// As linhas abaixo NUNCA serão executadas, porque a linha anterior causa um erro fatal.
if (!$usuarioValido) {
    echo "Dados do usuário incompletos";
    return false;
}

echo "\n ...Usuário válido. Pode prosseguir com a operação.\n";