<?php
require_once "Produto.php";
class Hardware extends Produto {

    public function _construct(int $codigo, string $descricao, int $quantidade, float $precoTotal)
    {
        $this->setCodigo($codigo);
        $this->setDescricao($descricao);
        $this->setQuantidade($quantidade);
        $this->setPrecoTotal($precoTotal);
    }

    public function imprimeEtiqueta()
    {
        echo "<p>
        Tipo: Hardware <br>
        Cod: {$this->getCodido()} <br>
        Descrição: {$this->getDescricao()}
        Quantidade: {$this->getQuantidade()} <br>
        Preço: {$this->getPrecoTotal()}
        </p>";
    }
}