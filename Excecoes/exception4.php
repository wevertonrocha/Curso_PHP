<?php

/**
 * Define uma função para validar os dados de um usuário.
 * A função espera receber um array com as chaves 'codigo', 'nome' e 'idade'.
 * @param array $usuario O array contendo os dados do usuário.
 * @return bool Retorna true se o usuário for válido.
 * @throws Exception Lança uma exceção se algum campo estiver faltando ou vazio.
 */
function validaUsuario(array $usuario)
{
    // Verifica se alguma das chaves essenciais ('codigo', 'nome', 'idade') está vazia no array.
    // A função empty() retorna true para strings vazias (''), 0, null, etc.
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        // Se a condição for verdadeira (algum campo está vazio), uma nova exceção é criada e "lançada".
        // 'throw' interrompe a execução normal da função e procura por um bloco 'catch' para tratar o erro.
        // A mensagem "Dados do usuário incompletos" é passada para o objeto Exception.
        throw new Exception("Dados do usuário incompletos");
    }

    // Se a validação passar (nenhum campo estiver vazio), a função retorna true.
    return true;
}

// Cria um array de usuário para teste.
// Note que a chave 'nome' está com uma string vazia, o que fará com que a validação falhe.
$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 30
];

// O bloco try...catch é usado para controlar exceções (erros).
try {
    // O código dentro do 'try' é a parte que "tentamos" executar.
    // Sabemos que a função validaUsuario() pode lançar uma exceção, então a colocamos aqui.
    $status = validaUsuario($usuario);
    // Se a exceção for lançada na linha acima, o código restante do bloco 'try' não é executado.

} catch (Exception $e) {
    // O bloco 'catch' é executado SOMENTE SE uma exceção do tipo 'Exception' for lançada no bloco 'try'.
    // A exceção que foi lançada é "capturada" na variável $e.
    
    // Exibimos a mensagem de erro que foi definida no 'throw new Exception(...)'.
    // O método getMessage() retorna a string que passamos ao criar a exceção.
    echo "<br> ...Erro: " . $e->getMessage() . "<br>";
    
}
// O bloco 'finally' é opcional e será executado SEMPRE,
// não importa se uma exceção foi lançada ou não.
// É muito útil para tarefas de "limpeza", como fechar uma conexão com banco de dados ou fechar um arquivo.
finally {
    echo "<br> ... Execução finalizada.";
}