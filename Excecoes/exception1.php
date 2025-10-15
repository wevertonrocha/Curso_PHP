<?php

/**
 * Define uma função para validar os dados de um usuário.
 * Este é um método "tradicional" de validação.
 * @param array $usuario O array contendo os dados do usuário.
 * @return bool Retorna 'false' se a validação falhar, e 'true' se for bem-sucedida.
 */
function validaUsuario(array $usuario)
{
    // Verifica se alguma das chaves essenciais ('codigo', 'nome', 'idade') está vazia.
    // A função empty() considera '', 0, null, e um array vazio como "vazio".
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        // Se algum campo estiver vazio, a função retorna 'false', sinalizando um erro.
        return false;
    }

    // Se todos os campos estiverem preenchidos, a função retorna 'true', sinalizando sucesso.
    return true;
}

// Cria um array de usuário para teste.
// O campo 'nome' está vazio de propósito para causar a falha na validação.
$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 30
];

// Chama a função de validação e armazena o resultado (true ou false) na variável.
$usuarioValido = validaUsuario($usuario);

// Verifica se o resultado da validação NÃO é verdadeiro.
// Este 'if' é o responsável por tratar o "erro" retornado pela função.
// O problema dessa abordagem é que o código de sucesso e o de erro ficam misturados no fluxo principal.
if (!$usuarioValido) {
    echo "Dados do usuário incompletos";
    // Interrompe a execução do script, pois o usuário é inválido.
    return false;
}

// Este trecho só será executado se a validação passar (se $usuarioValido for true).
echo "\n ...Usuário válido. Pode prosseguir com a operação.\n";