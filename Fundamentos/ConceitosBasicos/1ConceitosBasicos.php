<?php
    echo "Olá, mundo!<br>";

    // Comentário de exemplo

    /*
    Comentário
    de 
    múltiplas linhas
    */ 

     // Variáveis
     echo "<br>Variáveis<br><br>";

     $nome = "Weverton";

     echo "Meu nome é $nome <br>";

     $sobrenome = "Rocha";

     $nomeCompleto = $nome . " " . $sobrenome;

     echo "Meu nome completo é $nomeCompleto <br>";

     $idade = 27;
        echo "Eu tenho $idade anos <br>";

    $somaIdade = $idade + 5;

    echo "Daqui a 5 anos, eu terei $somaIdade anos.<br>";

    $altura = 1.75;
    echo "Minha altura é $altura metros.<br>";

    // Booleanos
    echo "<br>Booleanos<br><br>";

    $verdadeiro = true;

    $falso = false;


    //Arrays - listas
    echo "<br>Arrays - listas<br><br>";

    $frutas = ["maçã", "banana", "laranja"];

    echo "Primeira fruta: " . $frutas[0] . "<br>";
    echo "Segunda fruta: " . $frutas[1] . "<br>";
    echo "Terceira fruta: " . $frutas[2] . "<br>";

    $frutas[] = "mamão";
    
    echo $frutas[3] . "<br>";

    //Operadores aritméticos
    echo "<br>Operadores aritméticos<br><br>";

    $numeroUm = 10;
    $numeroDois = 5;

    $soma = $numeroUm + $numeroDois;
    $subtracao = $numeroUm - $numeroDois;
    $multiplicacao = $numeroUm * $numeroDois;
    $divisao = $numeroUm / $numeroDois;

    echo "Soma: $soma <br>";
    echo "Subtração: $subtracao <br>";
    echo "Multiplicação: $multiplicacao <br>";
    echo "Divisão: $divisao <br>";

    // ==, === !=
    echo "<br>Comparações<br><br>";

    $numeroTres = 15;

    echo "Igualdade: " . ($numeroTres == $numeroUm ? "Verdadeiro" : "Falso") . "<br>";
    echo "Identidade: " . ($numeroTres === 15 ? "Verdadeiro" : "Falso") . "<br>";
    echo "Identidade: " . ($numeroTres === "15" ? "Verdadeiro" : "Falso") . "<br>";
    echo "Desigualdade: " . ($numeroTres != $numeroUm ? "Verdadeiro" : "Falso") . "<br>";

    // Operadores logicos (Tabela verdade)
    echo "<br>Operadores lógicos (Tabela verdade)<br><br>";

    $verdadeiro = true;
    $falso = false;

    echo "E: " . ($verdadeiro && $falso ? "Verdadeiro" : "Falso") . "<br>";
    echo "OU: " . ($verdadeiro || $falso ? "Verdadeiro" : "Falso") . "<br>";
    echo "NÃO: " . (!$verdadeiro ? "Verdadeiro" : "Falso") . "<br><br>";

    $idade = 27;
    $temCarteira = false;
    echo $idade . " anos<br>";
    

    echo "Pode dirigir: " . ($idade >= 18 && $temCarteira ? "Sim" : "Não") . "<br>";
    echo "Deve tirar carteira: " . ($idade < 18 || !$temCarteira ? "Sim" : "Não") . "<br>";

    // Operadores de atribuição
    echo "<br>Operadores de atribuição<br><br>";

    $x = 10;
    $y = 5;

    $x += 2; // $x = $x + 2
    $y -= 1; // $y = $y - 1

    echo "X: $x<br>";
    echo "Y: $y<br>";

    
?>