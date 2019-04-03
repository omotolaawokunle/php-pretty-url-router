<?php
class router{
    private $routes;
    
    function __construct() {
        $this->routes = $GLOBALS['config']['routes'];
        $route = $this->findRoute();
        if(class_exists($route["controller"])){
            $controller = new $route['controller']();
            if(method_exists($controller, $route['method'])){
                $controller->$route['method']();
            }else{
                errors::show(404);
            }
        }else{
                errors::show(404);
        }    
        
        }
    
    private function routePart($route){
        if(is_array($route)){
            $route = $route['url'];
        }
        $parts = explode("/", $route);
        return $parts;
    }
    
    static function uri($part){
        return url::part($part);
        /*$parts = explode("/", $_SERVER['REQUEST_URI']);
        if($parts[1] == $GLOBALS['config']['path']['index']){
            $part++;
        }
        if(isset($parts[$part])) {
            return $parts[$part];
        }else{
            "";
        }*/
    }


    private function findRoute() {
        foreach ($this->routes as $route) {
            $parts = $this->routePart($route);
            $allMatch = true;
            foreach ($parts as $key => $value) {
                if($value != "*"){
                    if(router::uri($key) != $value){
                        $allMatch = false;
                    }
                }
            }
            if($allMatch){
                return $route;
            }
        }
        $uri_1 = router::uri(2);
        $uri_2 = router::uri(3);
        if($uri_1 == ""){
            $uri_1 = $GLOBALS['config']['default']['controller'];
        }
        if($uri_2 == ""){
            $uri_2 = $GLOBALS['config']['default']['method'];
        }
        $route = array(
            "controller" => $uri_1,
            "method" => $uri_2
        );
        return $route;
    }
}

