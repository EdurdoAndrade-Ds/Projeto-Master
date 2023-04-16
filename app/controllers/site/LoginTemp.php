<?php

namespace app\controllers\site;

use app\models\User as UserModel;

Class LoginTemp
{
    public array $teste = [];
    public string $view;
    public array $data = [];
    public string $master = 'index.php';

    public function index()
    {
        $this->view = 'loginTemp.php';

        $this->data = [
            'title' => 'Login Temp',
        ];
    }
    
}