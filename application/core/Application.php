<?php

namespace core;

class Application {

    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public Controller $controller;
    public Database $db;

    public static Application $app;

    public function __construct($rootPath) {
        self::$ROOT_DIR = $rootPath."\\application\\";
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);

        $this->db =  new Database();
    }

    public function run() {
        echo $this->router->resolve();
    }

    public function getController() {
        return $this->controller;
    }

    public function setController($controller) {
        $this->controller = $controller;
    }
}

?>