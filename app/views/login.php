<h2>Login Acesso</h2>

<!-- <form action="/login/store" method="post"> 
    <link rel="stylesheet" href="/assets/css/styles.css">
    <input type="text" name="login" placeholder="Seu usuario." value="Root">
    <input type="password" name="senha" placeholder="Sua senha.">
    <button type="submit" name="acao" class="btn btn-primary">Logar</button>
</form>

<br> -->

<link rel="stylesheet" href="/assets/css/styles.css">
<link rel="stylesheet" href="assets/css/stylesLogin.css">

<section class="area-Login">
    <div class="LoginDiv">
        <div>
            <img src="assets\img\logo.png">
        </div>

        <form action="/login/store" method="post"> 

            <input type="text" name="login" placeholder="Seu usuario." autofocus>
            <input type="password" name="senha" placeholder="Sua senha.">
            <button type="submit" name="acao" class="btn btn-primary">Logar</button>

        </form>
        <p>Ainda nâo tem uma conta?<a href="#">Criar Conta</a></p>
    </div>
</section>

<?php echo flash('login'); ?>