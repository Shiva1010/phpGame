<?php
class Router{
    protected  $routes = [
        'GET' => [],
        'POST' => [],
    ];
    public static function load($file){
        $router = new static;
        require $file;

        return $router;     // Router new 一個自己
    }

    public function get($uri, $controller){

        $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }


    // 檢查輸入的URI有沒有被定義在routes中，有的話就回傳他所對應到的controller;沒有則回報'No route defined for this URI.'的錯誤訊息。
    public function direct($uri, $requestType){
        if(array_key_exists($uri, $this->routes[$requestType])){

            return $this->routes[$requestType][$uri];

        }

        throw new Exception('No route defined for this URI');

    }

}