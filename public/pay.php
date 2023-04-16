<?php

use app\classes\Cart;
use app\classes\CartProducts;

session_start();

require '../vendor/autoload.php';

$cartProducts = new CartProducts;

$products = $cartProducts->products(new Cart);

$userMaster = 'Eduardo Andrade';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/styles2.css">
    <title>Pagamento Efetuado</title>

    <style>
        h1 {
            text-align: center;
            padding-top: 250px;
            background-image: url(./assets/img/pay.png);
            height: 100%;
            background-position: top center;
            background-repeat: no-repeat;
            float: center;
        }

        /* body {
            /* height: 50px; */
            float: center;
            /* line-height: 80px; */
            /* background-position: left center; */
            /* background-size: cover; */
            border: 1px solid transparent;
        } */

    </style>
</head>
<body>
    <section id="header">
        <ul id="nav">
            <li><a href="/cart">Voltar para o cart</a></li>
        </ul>

        
        <?php (new Cart)->clear(); ?>
        
    </section>
    
    
    <!-- <h1>Parabéns compra feita com sucesso no valor: R$ <?php echo number_format($products['total'], 2, ',', '.') ?></h1> -->
    <h1>Pagamento aprovado no valor: R$ <?php echo number_format($products['total'], 2, ',', '.') ?></h1>

    <!-- <img src="./assets/img/pay.png" alt=""> -->
</body> 
</html>