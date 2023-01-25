<?php

namespace app\controllers\cart;

use app\interfaces\ControllerInterface;
use app\classes\BlockNoReason;

class Home implements ControllerInterface
{
    public array $data = [];
    public string $view;
    public string $master;

    public function __construct()
    {
        BlockNoReason::block($this, ['show']);
    }

    public function index(array $args)
    {
        $this->data = [
            'title' => 'Cart'
        ];
        $this->master = 'cart/index.php';
        $this->view = 'cart/home.php';
    }

    public function edit(array $args)
    {
        // TODO: Implement edit() method.
    }

    public function show(array $args)
    {
        return 'app\classes\Cart.php';
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
