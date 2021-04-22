<?php

namespace core;

use core\middlewares\BaseMiddleware;

class Controller {

    public string $layout = 'main';
    public string $action = '';
    
    protected array $middlewares = [];

    public function render($view, $params = []) {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout($layout) {
        $this->layout = $layout;
    } 

    public function registerMiddleware(BaseMiddleWare $middleware) {
        $this->middlewares = array($middleware);
    }

    public function getMiddlewares(): array {
        return $this->middlewares;
    }

}


?>