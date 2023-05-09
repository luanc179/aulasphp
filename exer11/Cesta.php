<?php
class Cesta{
    private $itens;

    public function AdicionaItem(Produto $produto)
    {
        $this-> itens [] = $produto;
    }

    public function ExibeLista()
    {
        foreach ($this-> $itens as $item) {
            $item->imprimeEtiqueta();
        }
    }

    public function calculaTotal ()
    {
        $total = 0;
        foreach ($this-> $itens as $item) {
            $total += $item->getPrecoTotal();
        }

        echo "Total : {$total}";
    }
}

