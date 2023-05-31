<?php
class Kernel {
public function bootstrap()
{
    $router = new Router();
    $routes = include './src/config/routes.php';
    $controller = new Controller($router);
    
    if (array_key_exists($router->getPage(), $routes)) {
        $methodName = $routes[$router->getPage()];
        
    }else{
        $methodName = "notFound";
    }
    $controller->$methodName();
}
}