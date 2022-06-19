<?php
/**
 * Leia: https://alexandrebbarbosa.wordpress.com/2019/04/17/phpconstruir-um-sistema-de-rotas-para-mvc-primeira-parte/
 * para aprender sobre rotas. 
**/

require_once __DIR__ . '/routes/RouteSwitch.php';


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