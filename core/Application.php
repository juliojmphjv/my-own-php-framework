<?php

namespace app\core;

class Application
{
    public static string $ROOT_DIR;
    public static $app;
    public Response $response; 
    public Router $router;
    public Request $request;

    public function __construct(string $rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request;
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
