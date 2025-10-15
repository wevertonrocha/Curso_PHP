<?php

/**
 * Função de validação que lança uma exceção em caso de erro.
 * @param array $usuario O array contendo os dados do usuário.
 * @return bool Retorna true se o usuário for válido.
 * @throws Exception Lança uma exceção se a validação falhar.
 */
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
    'idade' => 30
];

// O bloco try...catch separa o fluxo principal do tratamento de erros.
try {
    // 1. TENTAMOS executar o código que pode falhar.
    // Se validaUsuario() lançar uma exceção, a execução deste bloco 'try' para...
    $status = validaUsuario($usuario);

} catch (Exception $e) {
    // 2. ...e o controle é passado para este bloco 'catch'.
    // A exceção é capturada na variável $e.
    
    // Usamos o método getMessage() do objeto de exceção para exibir a mensagem de erro.
    echo "<br> ...Erro: " . $e->getMessage() . "<br>";
    
    // die() ou exit() são usados para parar completamente a execução do script após tratar o erro.
    die();
}

// Este código só será executado se NENHUMA exceção for lançada dentro do bloco 'try'.
// Isso limpa o código, pois não precisamos de um 'if/else' para controlar o fluxo.
echo "<br> ...Usuário válido. Pode prosseguir com a operação.<br>";