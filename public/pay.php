<?php

use Edapp\classes\Cart;
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
</head>
<body>
    <h1>Parabéns compra feita com sucesso no valor: R$ <?php echo number_format($products['total'], 2, ',', '.') ?></h1>
    <section id="header">
        <ul id="nav">
            <li><a href="/cart">Voltar para o cart</a></li>
        </ul>
    
        <?php (new Cart)->clear(); ?>
           
    </section>

</body> 
</html>