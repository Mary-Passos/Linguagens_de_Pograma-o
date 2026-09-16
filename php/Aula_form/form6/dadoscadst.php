<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];

echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";
echo "Cidade: " . $cidade . "<br>";


fwrite("cadastro.txt", "#" . $nome);
fwrite("cadastro.txt", "#" . $email);
fwrite("cadastro.txt", "#" . $cidade) . "<br>";
fclose("cadastro.txt");
