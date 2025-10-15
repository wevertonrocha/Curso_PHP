<?php

// O bloco try...catch é uma estrutura para controle de erros.
// Ele permite que você "tente" executar um bloco de código que pode falhar
// e "capture" o erro de forma controlada, sem que o script pare abruptamente.

try {
    // Dentro do bloco 'try', colocamos o código que pode gerar uma exceção (um erro).
    // 'throw' é a palavra-chave usada para "lançar" uma exceção manualmente.
    // 'new Exception(...)' cria um objeto do tipo 'Exception'.
    // A string "Houve um erro." é a mensagem que será associada a este erro específico.
    // Quando o 'throw' é executado, a execução normal do bloco 'try' é interrompida
    // e o PHP imediatamente procura por um bloco 'catch' compatível.
    throw new Exception("Houve um erro.");

    // IMPORTANTE: Qualquer código colocado após o 'throw' dentro do 'try' não será executado,
    // pois o 'throw' desvia o fluxo de execução para o 'catch'.
    // echo "Esta linha nunca será exibida.";

} catch (Exception $e) {
    // O bloco 'catch' só é executado se uma exceção for lançada no bloco 'try'.
    // (Exception $e) significa que este bloco irá "capturar" qualquer exceção que seja do tipo 'Exception'.
    // A exceção que foi lançada é armazenada na variável '$e'.
    // '$e' é um objeto que contém todas as informações sobre o erro.

    // O método getMessage() é chamado no objeto da exceção ($e)
    // para obter a mensagem de texto que foi definida quando a exceção foi criada.
    // Neste caso, ele retornará "Houve um erro.".
    echo json_encode([
        "message" => $e->getMessage(),
    ]);
}