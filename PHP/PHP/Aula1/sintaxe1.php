
<?php
echo "INÍCIO\n";
print "Treinando PHP no vs code. \n";
echo "Fim do exercicio.";

$nome = readline("Digite seu nome: ");
echo "Olá, " . $nome . "!\n";

$n1 = 5 + 2 *2;
echo "O resultado da expressão 5 + 2 * 2 é: " . $n1 . "\n";

$a = 4;
$b = 8;

if ($a < $b) {
    echo " O valo de " . $a . " é menor que o valor de " . $b . ".\n";
} else {
      echo " O valor de " . $b . " è maior qu o valor de " . $a . "\n";

}

for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i\n";
}

$frutas = array("maçã", "banana", "laranja", "abacaxi", "uva", "melão");
foreach ($frutas as $fruta) {
    echo "$frutas\n";
}
?>

