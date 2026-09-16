<?php


class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;

    }

}

$produto1 = new Produto("Escova", 2.50, 10);
$produto2 = new Produto("cabo", 5.00, 18);
$produto3 = new Produto("panela", 50.00, 13);

echo "Produto: " . $this->nome . "\n";
echo "Produto: " . $this->preco . "\n";
echo "Produto: " . $this->quantidade . "\n";
?>