<?php

namespace app\classes;

use app\controllers\site\User;

class databaseUser extends User
{
    public array $data = [];
    public string $view;
    public string $master;
    
    public function findyBy($params)
    {
        return 'dentro da findyBy';
    }
}