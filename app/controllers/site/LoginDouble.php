<?php

namespace app\controllers\site;

use app\models\User as UserModel;

Class LoginDouble
{
    public array $teste = [];
    public string $view;
    public array $data = [];
    public string $master = 'index.php';

    public function index()
    {
        $this->view = 'loginDouble.php';

        $this->data = [
            'title' => 'Login Dinamic',
        ];
    }
    
}