<?php

    class UsersController {
        private $model;

        public function __construct() {
            $this->model = new UsersModels();
        }

        public function add_user($body = array()) {
            return $this->model->add($body);
        }
    }