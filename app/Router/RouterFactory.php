<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Routing\Route;

final class RouterFactory
{
    use Nette\StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList;

        $router[] = new Route('category/<category>/page/<page \d+>', [
            'presenter' => 'Category',
            'action' => 'page',
        ]);

        

        return $router;
    }
}
