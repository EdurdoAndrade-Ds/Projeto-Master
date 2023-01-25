<?php

namespace app\controllers\site;

use app\models\User as UserModel;

Class Teste
{
    public array $teste = [];
    public string $view;
    public array $data = [];
    public string $master = 'index.php';

    public function index()
    {
        $this->view = 'teste.php';

        $this->data = [
            'title' => 'Site teste',
        ];
    }
    
}