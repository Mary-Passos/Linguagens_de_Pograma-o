<?php
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);

echo "_____TODOS OS NÚMEROS_____" . "\n";

foreach ($numeros as $numero) {
    echo  "número: " . $numero . "\n";
}

echo "_____QUANT. DE ELEMENTOS_____" . "\n";
echo "\n";
echo "Números de elementos: " . count($numeros) . "\n";

echo "_____MENOR VALOR_____" . "\n";
echo "\n";


echo "_____MÉDIA DOS NÚMEROS_____" . "\n";
echo "\n"; 

   

echo "_____NÚMEROS PARES_____" . "\n";
echo "\n";

foreach ($numeros as $par){
 if($par % 2 == 0){
    echo "O número " .$par . " é par.". "\n";
 }
 }


?>