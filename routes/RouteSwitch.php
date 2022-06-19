<?php

abstract class RouteSwitch {
    protected function home() {
        require __DIR__ . '/views/home.php';
    }

    protected function estoque() {
        require __DIR__ . '/views/estoque.php';
    }

    protected function contasPagar() {
        require __DIR__ . 'views/contasPagar.php';
    }

    protected function __call($name, $arguments) {
        http_response_code(404);
        require __DIR__ . '/views/not_found.php';
    }
}