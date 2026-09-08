<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$media = ($nota1 + $nota2) / 2;

if ($media >= 7){
echo "Aluno aprovado.";
} else {
    echo "Aluno reprovado.";
}
?>