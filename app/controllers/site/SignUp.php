<?php

namespace app\controllers\site;

use app\models\User;
use app\classes\Flash;
use app\classes\Validate;
use app\models\activerecord\Insert;
use app\models\activerecord\FindAllUser;

class SignUp
{
    public string $view;
    public array $data = [];
    public string $master = 'index.php';


    public function index()
    {
        $this->view = 'signup.php';

        $this->data = [
            'title' => 'SignUp'
        ];
    }

    public function store()
    {
        $validate = new Validate();
        $validate->handle([
            'firstName' => [REQUIRED],
            'lastName' => [REQUIRED],
            'email' => [REQUIRED,EMAIL],
            'password' => [REQUIRED,MAXLEN.':5'],
        ]);

        if ($validate->errors) {
            return redirect('/signup');
        }

        
        echo 'Signup com sucesso ' . '|' . ' <a href="/" class="btn btn-primary">Home</a>';
        die();
        // $user = new User;
        $user->firstName = $validate->data['firstName'];
        $user->lastName = $validate->data['lastName'];
        $user->email = $validate->data['email'];
        $user->password = password_hash($validate->data['password'], PASSWORD_DEFAULT);
        $created = $user->execute(new Insert);

        $created = $this->table->findyAllUser(new FindAllUser);
        $created = 'sucess';

        if ($created) {
            Flash::set('created', 'Cadastrado com sucesso', 'success');
            return redirect('/signup');
        }
        return redirect('/signup');
    }
}

    ?>

<!-- // HTML -->
<link rel="stylesheet" href="/assets/css/styles.css">