<?php
function potencia($base,$expoente){
    $resultado = $base ** $expoente;
    return "Potencia: ".$resultado . "\n";
}

echo potencia(2,3);

function eh_par($numero){
    if($numero % 2 == 0){
        return "O número $numero é par.";
    } else {
        return "O número $numero é ímpar.";
    }
 
}
echo eh_par(4) . "\n";

function maior_texto($texto1, $texto2) {
    if (strlen($texto1) > strlen($texto2)){
        return "O texto $texto1 é maior que o texto $texto2" . "\n";
    } else {
        return "O texto $texto2 é maior que o texto $texto1";   
    }
}

echo maior_texto("Luan", "Cleydson") . "\n";

function formatar_nome($nome){
    $nome = ucwords($nome);
    return $nome;
}
echo "Texto tratado: ". formatar_nome("bela silva") . "\n";
?>

