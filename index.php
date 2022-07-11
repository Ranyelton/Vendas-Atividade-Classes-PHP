<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="m-5">
    


<?php

include ('Vendas.php');

//Tipos de Venda
//0 - a prazo
//1 - a vista
//2 - a prazo pago

$v1 = new Vendas();
$v1->numVenda = 1;
$v1->tipoVenda = 0;
$v1->gerarProdutos();
$v1->calcular();

$v2 = new Vendas();
$v2->numVenda = 2;
$v2->tipoVenda = 2;
$v2->gerarProdutos();
$v2->calcular();

$v3 = new Vendas();
$v3->numVenda = 3;
$v3->tipoVenda = 0;
$v3->gerarProdutos();
$v3->calcular();

$v4 = new Vendas();
$v4->numVenda = 4;
$v4->tipoVenda = 1;
$v4->gerarProdutos();
$v4->calcular();

$v5 = new Vendas();
$v5->numVenda = 5;
$v5->tipoVenda = 1;
$v5->gerarProdutos();
$v5->calcular();

$vendas = [];
$vendas[0] = $v1;
$vendas[1] = $v2;
$vendas[2] = $v3;
$vendas[3] = $v4;
$vendas[4] = $v5;


$aprazo = [];
$avista = [];
$aprazopago = [];

for($z=0; $z<5; $z++){
    $tipo = $vendas[$z]->tipoVenda;

    if($tipo == 0){
        array_push($aprazo, $vendas[$z]);
    }

    if($tipo == 1){
        array_push($avista, $vendas[$z]);
    }

    if($tipo == 2){
        array_push($aprazopago, $vendas[$z]);
    }
}

function mostraDados($vetor){
    for($h=0; $h<(count($vetor)); $h++){

        $vetor[$h]->mostraVendas();
    }
}


echo '<h2>Vendas A Prazo</h2>';
mostraDados($aprazo);
echo '<hr>';

echo '<h2>Vendas A Vista</h2>';
mostraDados($avista);
echo '<hr>';

echo '<h2>Vendas A Prazo Pagas<h2>';
mostraDados($aprazopago);
echo '<hr>';


//echo '<h3>Valor Total: '.$v1->valor.'</h3><br><hr>';

?>

</body>
</html>