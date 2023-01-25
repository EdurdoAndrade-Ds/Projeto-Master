<?php

namespace app\controllers\dados;

class Home
{
    public array $data = [];
    public string $view;
    public string $master;

    public function index(array $args)
    {
        $this->data = [
            'title' => 'Dados'
        ];
        $this->master = 'dados/index.php';
        $this->view = 'dados/home.php';
    }

    public function edit(array $args)
    {
        // TODO: Implement edit() method.
    }

    public function show(array $args)
    {
        // TODO: Implement show() method.
    }

    public function update(array $args)
    {
        // TODO: Implement update() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function destroy(array $args)
    {
        // TODO: Implement destroy() method.
    }
}
