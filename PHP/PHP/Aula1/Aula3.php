<?php
#Atividade Aula_3
#Na frase “América Latina pode perder 2,4 milhões de empregos” imprimir o tamanho da frase, o número de palavras e o tamanho de cada uma

$frase = "América Latina pode perder 2,4 milhões de empregos";
echo "Tamanho da frase: " . strlen($frase) . " caracteres\n";
echo "Número de palavras: " . str_word_count($frase) . "\n";

$palavras = explode(" ", $frase);
foreach ($palavras as $palavra) {
    echo "Tamanho da palavra '$palavra': " . strlen($palavra) . " caracteres\n";
}

#1. Receba um array(8,9,5,4,7) com as notas de alunos e para cada um diga se ele foi aprovado na matéria (média 7)

$notas = array(8, 9, 5, 4, 7);

foreach ($notas as $nota) {
    if ($nota >= 7) {
        echo "Aprovado\n";
    } else {
        echo "Reprovado\n";
    }

}
?>

<?php
#2. 
$sexo = strtolower("mulher");
$tempo = "32" ;

if ($sexo == "mulher" and $tempo >= 30 ) {
    echo "Ela pode se aposentar.";
} elseif ($sexo == "mulher" and $tempo < 30) {
    echo "Ela ainda não pode se aposentar.";
} elseif ($sexo == "homem" and $tempo >= 35) {
    echo "Ele pode se aposentar.";
} else {
    echo "Ele ainda não pode se aposenta";
}
?>

<?php
#3. Imprima uma tabela em HTML com as linhas alternando de cor

?>

<?php
#4.

$n1 = 6;
$n2 = 6;
$n3 = 6; 

$media = ($n1 + $n2 + $n3 / 3);

if ($n1 <= 3 or $n2 <= 3 or $n3 <= 3) {
    echo "Aluno reprovado";
} elseif ($n1 <= 5 or $n2 <= 5 or $n3 <= 5) {
    echo "Aluno vai para a final";
} elseif ($n1 <= 4 or $n2 <= 4 or $n3 <= 4 and $media > 7) {
    echo "Aluno aprovado";
} elseif ($media == 7) {
    echo "Aluno aprovado por média";
} elseif ($n1 <= 3 or $n2 <= 3 or $n3 == 10) {
    echo "Parabéns! Você tirou 10!";
} else {
    echo "Aluno em recuperação.";
}
?>