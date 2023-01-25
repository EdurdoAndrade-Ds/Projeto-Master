<?php

namespace app\classes;

use app\interfaces\ControllerInterface;

class BlockNoReason
{
    public static function block(ControllerInterface $controllerInterface, array $blockMethods)
    {
        $canBlockMethod = Block::getMethodToBlock($controllerInterface, $blockMethods);

        if ($canBlockMethod) {
            BlockPostRequest::block();
            return redirect('/');
        }
    }
}
