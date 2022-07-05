<?php

class Vendas{
    public $produto = [];
    public $valor = [];
    
    

    public function calcular(){
        $valorTotal = 0;
        for($i=0; $i<2; $i++){
            $valorTotal = $this->valor[$i] + $valorTotal;
        }

        return $valorTotal;
    }
}


?>