<?php

function welcome($user)
{
    if (isset($_SESSION['acao'])) {
        $user = $_SESSION['acao'];

        return 'Visitante';
    } 
    
    return $_SESSION['login'] . ' | <a href="/login/destroy">Logout</a>';


}
