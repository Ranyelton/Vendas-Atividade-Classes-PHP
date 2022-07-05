<?php

include ('Produtos.php');
include ('Vendas.php');

$p1 = new Produtos();
$p1->id = 1;
$p1->nome = 'Ronaldo';
$p1->valor = 3;
$p1->quant = 4;

$p2 = new Produtos();
$p2->id = 2;
$p2->nome = 'Abacaxi';
$p2->valor = 7;
$p2->quant = 2;




$v1 = new Vendas();
$v1->produto = [$p1->nome, $p2->nome];
$v1->valor = [$p1->valorCalc(), $p2->valorCalc()];


echo '<br><table ><tr >
<td style="border: solid; padding: 2%; width: 100px"><strong>Nome</strong></td>
<td style="border: solid; padding: 2%; width: 100px"><strong>Valor Total</strong></td>
</tr>';

echo '<tr><td>'.$v1->produto[0].'</td>';
echo '<td> R$ '.$v1->valor[0].'</td></tr>';

echo '<tr><td>'.$v1->produto[1].'</td>';
echo '<td> R$ '.$v1->valor[1].'</td></tr></table>';


echo '<hr>Total Venda: R$ '.$v1->calcular();

?>