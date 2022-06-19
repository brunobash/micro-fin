<?php

require_once __DIR__ . '/RouteSwitch.php';


class Router extends RouteSwitch {
    public function run(string $requestUri) {
        $route = substr($requestUri, 1); // eu sei que ta quebrando o SRP, mas sou burro e não sei como fazer diferente

        if($route === '') {
            $this->home();
        } else {
            $this->$route();
        }
    }
}   