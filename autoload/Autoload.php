<?php

    class Autoload {
        public function __construct() {
            spl_autoload_register(function($class_name) {
                $models_path = './models/' . $class_name . '.php';
                $controllers_path = './controllers/' .$class_name . '.php';
                $router_path = './router/' .$class_name . '.php';
                $utils_path = './utils/' .$class_name . '.php';

                if (file_exists($models_path)) {
                    require_once($models_path);
                }

                if (file_exists($controllers_path)) {
                    require_once($controllers_path);
                }

                if (file_exists($router_path)) {
                    require_once($router_path);
                }

                if (file_exists($utils_path)) {
                    require_once($utils_path);
                }
            });
        }

        public function __destruct() {
            
        }
    }