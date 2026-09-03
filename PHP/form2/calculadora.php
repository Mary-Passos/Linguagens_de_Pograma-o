<?php
$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];
$operacao = $_POST["operador"];

$result_soma = $numero1 + $numero2;
$result_sub = $numero1 - $numero2;
$result_mult = $numero1 * $numero2;
$result_div = $numero1 / $numero2;



switch ($operacao ){
    case  "+" :
        echo $result_soma;
        break;
    case "-":
        echo $result_sub;
        break;
    case "*":
        echo $result_mult;
        break;
    case "/":
        echo $result_div;
        break;
    default:
        echo "informe umas das quatro operações: +, -, *, /";
        break;
}

if($$operacao == "*" and $numero1 == 0 or $numero2 == 0){
    echo "informe um numeo diferente de zero";
}
?>