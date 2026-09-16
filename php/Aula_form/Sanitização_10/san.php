<?php
$textoorig = $_POST['texto'];

$textohtml = htmlspecialchars($textoorig);

$txtcount = strlen($textoorig);

$txtmin = strtolower($textoorig);

$textmax = strtoupper($textoorig);

echo "Texto original: " . $textoorig. "<br>";
echo "Texto html: " . $textohtml . "<br>";
echo "Número de caracteres: " . $txtcount . "<br>";
echo "Texto em minúsculas: " . $txtmin . "<br>";
echo "Texto em maiúsculas: " . $textmax . "<br>";

?>