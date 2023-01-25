<?php 

use app\classes\databaseUser; 

$users = require('../app/helpers/user.php');

$views = "app\helpers\user.php";

?>

<link rel="stylesheet" href="/assets/css/styles.css">
<link rel="stylesheet" href="/assets/css/stylesMaster.css">

<div class="headerHome">

    <h1>Projeto Principal</h1>

</div> 

<h2>Lista de users (<?php echo count($users); ?>)</h2>

<!-- <img src="../assets/img/download.jfif" class="img-user" alt=""> -->

    <div id="container">
        <ul>
            <?php foreach ($users as $index => $user): ?>

                <li><?php $user['id']; ?>  <?php echo $user['firstName'];?> <?php echo $user['lastName']; ?> <?php $user['id']; ?> | <a href="dados"<?php echo $index; ?>>Ver User</a></li> 

                
            <?php endforeach; ?>
        </ul>
    </div>

