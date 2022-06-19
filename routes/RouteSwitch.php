<?php

abstract class RouteSwitch {
    protected function home() {
        require './views/home.php';
    }

    protected function estoque() {
        require './views/estoque.php';
    }

    protected function contasPagar() {
        require './views/contasPagar.php';
    }

    public function __call($name, $arguments) {
        http_response_code(404);
        require './views/not_found.php';
    }
}