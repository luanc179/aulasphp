<?php
 abstract class Produto {
     private $codido;
     private $descricao;
     private $quantidade;
     private $precoTotal;

     abstract function imprimeEtiqueta();

     public function getCodigo ()
     {
        return $this->codido;
     }

     public function getDescricao ()
     {
        return $this->descricao;
     }

     public function getQuantidade ()
     {
        return $this->quantidade;
     }

     public function getPrecoTotal ()
     {
        return $this->precoTotal;
     }

     public function setCodigo ( int $codido = 0)
     {
        $this->codido = $codido;
     }

     public function setDescricao ( string $descricaoes = "")
     {
        $this->descricao = $descricao;
     }

     public function setQuantidade ( int $quantidade = 0)
     {
        $this->quantidade = $quantidade;
     }

     public function setPrecoTotal ( float $precoTotal = 0.0)
     {
        $this->precoTotal = $precoTotal;
     }
}