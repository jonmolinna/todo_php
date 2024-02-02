<?php

    class AuthController {
        private $model;

        public function __construct() {
            $this->model = new AuthModels();
        }

        public function authentication($email) {
            $this->model->authentication($email);
        }
    }