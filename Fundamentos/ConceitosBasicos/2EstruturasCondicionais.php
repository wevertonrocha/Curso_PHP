<?php 
    echo "<br>Estruturas Condicionais<br><br>";

    /* Estruturas que usam operadores e comparadores
    para atingir resultados diferentes no fluxo de execução 
    
    if, else, else if*/

    $idade = 27;

    // if(COMPARAÇÃO -> BOOLEANO(T/F)) {EXECUÇÃO}
    // ELSE {EXECUTA SE ANTERIOR FOR FALSO}
    if ($idade >= 18) {
        echo "Maior de idade<br>";
    } else {
        echo "Menor de idade<br>";
    }
    // IF EXECUTA SE ANTERIOR FOR VERDADEIRO
    // ELSE EXECUTA SE ANTERIOR FOR FALSO

    // ELSE IF É UMA CONDIÇÃO INTERMEDIARIA
    $nota = 7;
    if ($nota >= 9) {
        echo "Você é um aluno conceito A";
    } else if ($nota >= 7) {
        echo "Você é um aluno conceito B";
    } else if ($nota >= 6) {
        echo "Você é um aluno conceito C";
    } else {
        echo "Você é um aluno conceito D";
    }

    echo "<br><br>Praticando condicionais<br><br>";

    $velocidade = 80;

    if ($velocidade > 100) {
        echo "Você está muito acima do limite de velocidade";
    } else if ($velocidade > 80){
        echo "Você está acima do limite de velocidade";
    } else if ($velocidade > 60) {
        echo "Você está dentro do limite de velocidade";
    } else {
        echo "Você está abaixo do limite de velocidade";
    }

?>