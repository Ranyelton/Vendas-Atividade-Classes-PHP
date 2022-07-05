<?php

class Produtos{
    public $id;
    public $nome;
    public $valor;
    public $quant;

    public function valorCalc(){
        $valor = $this->valor;
        $quant = $this->quant;
        $calc = $valor * $quant;
        return $calc;
    }
}