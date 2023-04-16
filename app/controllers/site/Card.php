<?php

namespace app\controllers\site;

use app\models\User as UserModel;

Class Card
{
    public array $teste = [];
    public string $view;
    public array $data = [];
    public string $master = 'index.php';

    public function index()
    {
        $this->view = 'card.php';

        $this->data = [
            'title' => 'Credit Card',
        ];
    }
    
}