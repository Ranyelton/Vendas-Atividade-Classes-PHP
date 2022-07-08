<?php
include ('Produtos.php');

class Vendas{
    public $produto;
    public $numVenda;
    public $valorUn;
    public $valor;
    public $tipoVenda;
    
    

    public function calcular(){
        $valor = 0;
        for($i=0; $i<=2; $i++){
            $this->valor = $this->produto[$i]->valorTotal + $this->valor;
        }
    }


    public function gerarProdutos(){
        $p1 = new Produtos();
        $p1->id = 1;
        $p1->nome = 'Ronaldo';
        $p1->valor = 3;
        $p1->quant = 4;
        $p1->valorCalc();
        
        $p2 = new Produtos();
        $p2->id = 2;
        $p2->nome = 'Abacaxi';
        $p2->valor = 7;
        $p2->quant = 2;
        $p2->valorCalc();

        $p3 = new Produtos();
        $p3->id = 2;
        $p3->nome = 'Banana';
        $p3->valor = 7;
        $p3->quant = 2;
        $p3->valorCalc();

        $this->produto[0] = $p1;
        $this->produto[1] = $p2;
        $this->produto[2] = $p3;
    }

    public function mostraVendas(){

        echo '<table ><tr >
        <td style="border: solid; padding: 2%; width: 100px"><strong>Venda: '.$this->numVenda.' </strong></td>
        <td style="border: solid; padding: 2%; width: 100px"><strong>Nome</strong></td>
        <td style="border: solid; padding: 2%; width: 100px"><strong>Valor Un</strong></td>
        <td style="border: solid; padding: 2%; width: 100px"><strong>Quant</strong></td>
        <td style="border: solid; padding: 2%; width: 100px"><strong>Valor Total</strong></td>
        </tr>';

        for($i=0; $i<(count($this->produto)); $i++){
            echo '<tr><td></td><td>'.$this->produto[$i]->nome.'</td>';
            echo '<td>'.$this->produto[$i]->valor.'</td>';
            echo '<td>'.$this->produto[$i]->quant.'</td>';
            echo '<td>'.$this->produto[$i]->valorTotal.'</td>';
            
        }
        
        
    }

}


?>