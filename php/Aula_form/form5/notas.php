<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$media = ($nota1 + $nota2) / 2;

if($media >= 7){
    echo "Parabéns! Aluno aprovado." . "<br>";
} elseif($media <= 7 and $media >= 5){
    echo "Aluno em recuperação. " . "<br>";
} else {
    echo "Aluno reprovado. " . "<br>";
}
echo "Sua média: " . $media;

