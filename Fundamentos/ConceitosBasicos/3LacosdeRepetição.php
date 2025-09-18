<?php   
echo "Laços de Repetição<br><br>";

//while, do while, for

// For => Repete um código com um contador

// for(incremento; condição; incremento) {//}

for($i = 0; $i <= 10; $i++){
    if($i >5) {
       
    echo ";)";
    }
   echo "Número: $i<br>";

}
echo "<br><br>";
echo "De forma decrecente<br><br>";

for($j = 20; $j > 10; $j--) {
   echo "Número: $j<br>";
}

echo "<br><br>";
echo "Numeros pares<br><br>";

for($par = 0; $par <=10; $par++) {
   if($par % 2 == 0) {
       echo "Número par: $par<br>";
   }
}

echo "<br><br>";
echo "Numeros ímpares<br><br>";
for($impar = 0; $impar <=10; $impar++){
    if($impar % 2 == 1)
        echo "Número ímpar: $impar<br>";
} 

//while
echo "<br><br>";
echo "Usando while<br><br>";
$contador = 1;

while($contador <= 10){
    echo "Número: $contador <br>";
    $contador++;

}

// Foreach
echo "<br><br>";
echo "Usando foreach<br><br>";
$joadores = ["Kaká", "Ronaldinho", "Ronaldo"];

foreach($joadores as $valor) {
    echo "Jogador: $valor <br>";
}

?>