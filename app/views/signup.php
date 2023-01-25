<?php echo flash('created') ?>

<link rel="stylesheet" href="assets/css/stylesLogin.css">

<section class="area-signup">
    <div class="SignupDiv">
        <div>
            <img src="assets/img/signupImg.png">
        </div>

        <form method="post" class="form-signup" action="signup/store">  
    
    <input type="text" name="firstName" placeholder="Seu nome" class="form-control" value="<?php echo old('firstName') ?>">
    <?php echo flash('firstName');  ?>

    <input type="text" name="lastName" placeholder="Seu Sobrenome" class="form-control" value="<?php echo old('lastName') ?>">
    <?php echo flash('lastName');  ?>

    <input type="text" name="email" placeholder="Seu email" class="form-control" value="<?php echo old('email') ?>">
    <?php echo flash('email');  ?>

    <input type="text" name="password" placeholder="Sua senha" class="form-control" value="<?php echo old('password') ?>">
    <?php echo flash('password');  ?>

    <button type="submit">Singup</button>

</form>


    </div>
</section>

