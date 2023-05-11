<?php
class Aluno{
    public $nome;
    public $id;
    public $matricula;


    public function _construct($nome = '', $id = 0){
        $this->nome = $nome;
        $this->id = $id;
        $this->matricula = 12334;
    }
}