<?php

    class Router {
        public $route;

        public function __construct($route) {
            $session_options = array();

            if (!isset($_SESSION)) {
                session_start();
            }

            if (!isset($_SESSION['ok'])) {
                $_SESSION['ok'] = false;
            }

            if ($_SESSION['ok']) {
                $this->route = isset($_GET['r']) ? $_GET['r'] : 'home';
                $controller = new ViewController();

                switch ($this->route) {
                    case 'home':
                        $controller->load_view('home');
                        break;
                    case 'todo':
                        $controller->load_view('todoList');
                        break;
                    case 'todoAdd':
                        $controller->load_view('todoAdd');
                        break;
                    case 'completed':
                        $controller->load_view('completed');
                        break;
                    default:
                        $controller->load_view('error404');
                        break;
                }
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
            }
        }
    }