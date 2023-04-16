<?php

namespace app\controllers\site;

use app\models\User as UserModel;

Class Watch
{
    public array $teste = [];
    public string $view;
    public array $data = [];
    public string $master = 'index.php';

    public function index()
    {
        $this->view = 'watch.php';

        $this->data = [
            'title' => 'Digital watch',
        ];
    }
    
}