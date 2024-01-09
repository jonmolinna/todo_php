<?php

    class Router {
        public $route;

        public function __construct($route) {
            $session_options = array();
            $auth = null;

            if ($auth) {
                echo 'Bienvenido al sistema';
            }
            else {
                $this->route = isset($_GET['r']) ? $_GET['r'] : 'login';
                $controller = new ViewController();

                switch ($this->route) {
                    case 'login':
                        $controller->load_view('login');
                        break;
                    case 'register':
                        $controller->load_view('register');
                        break;
                }


                // if (!isset($_POST['email']) && !isset($_POST['password'])) {
                //     $login_form = new ViewController();
                //     $login_form->load_view('login');
                // }
            }
        }
    }