<?php

namespace app\controllers\site;

use app\classes\Flash;
use app\classes\BlockNoReason;
use app\controllers\site\User;
use app\models\activerecord\FindBy;
use app\interfaces\ControllerInterface;

class Login implements ControllerInterface
{
    public string $view;
    public array $data = [];
    public string $master = 'index.php';


    public function __construct()
    {
        // BlockNoReason::block($this, ['store']);
    }
    
    public function index(array $args)
    {
        $this->view = 'login.php';
        $this->data = [
            'title' => 'Login'
        ];
    }

    public function store()
    {   
        $users = require('../app/helpers/user.php');

        foreach ($users as $index => $user):

            $user['firstName'];
            $user['password'];  

        endforeach; 

        if(!isset($_SESSION['login'])) {

            if(isset($_POST['acao'])) {
                $login = $user['firstName'];
                $senha = $user['password'];

                echo $login;
                echo $senha;
                // die();
                
                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm) {
                    // Logado com sucesso
                    
                    echo 'logado com sucesso';
                    $_SESSION['login'] = $login;
                    
                    
                    return redirect('/');
                    // header('Location: app/views/home.php');
                } else {
                    // Algum erro ocorreu
                    return redirect('/login');
                    echo 'Dados inválidos.';
                }
            } 

            include('login.php');
        }
        
        return redirect('/');
    }

    public function destroy(array $args)
    {
        session_destroy();

        unset($_SESSION['acao']);

        return redirect('/login');

    
    }

    public function edit(array $args)
    {
        throw new \Exception('Method edit() is not implemented.');
    }

    public function show(array $args)
    {
        return 'index';
    }

    public function update(array $args)
    {
        throw new \Exception('Method update() is not implemented.');
    }
}
