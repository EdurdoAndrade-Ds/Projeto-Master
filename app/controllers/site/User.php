<?php

namespace app\controllers\site;

use Exception;
use app\models\User as UserModel;
use app\models\activerecord\FindBy;
use app\models\activerecord\FindAllUser;

class User
{
    public array $users = [];
    public string $view;
    public array $data = [];
    public string $master = 'index.php';
    public string $userMaster = 'Eduardo Andrade';
    
    
    public function show()
    {
        $users = require('../app/helpers/user.php');
        // $user = (new FindAllUser)->excute();
        // $user = (new UserModel)->execute(new FindBy(field:'id', value:$args[0], fields:'id,firstName,lastName'));
        
        foreach ($users as $index => $user): 

            $user['id']; 
            $user['firstName'];  
            $user['lastName'];
            $user['id']; 

        endforeach;

        if (!$user) {
            throw new Exception('Usuário não encontrado');
        }
        
        $this->view = 'user.php';
        $this->data = [
            'title' => 'Dados do user',
            'user' => $user
        ];
    }
}
