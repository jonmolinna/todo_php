<?php

    class ValidateRegister {
        private $model_users;
        private $nameRegex = "/^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$/";
        private $emailRegex = "/^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/";
        public $errors = array();

        public function __construct() {
            $this->model_users = new UsersModels();
        }

        public function validar_register($body = array()) {
            foreach ($body as $key => $value) {
                $$key = $value;
            }

            if (empty($name)) {
                array_push($this->errors, 'Ingrese un nombre');
            }
            else if (strlen($name) <= 3) {
                array_push($this->errors, 'El nombre debe tener mas de tres caracteres');
            }
            else if (!preg_match($this->nameRegex, $name)) {
                array_push($this->errors, 'El nombre solo acepta letras y espacios');
            }

            if (empty($email)) {
                array_push($this->errors, 'Ingrese un email');
            }
            else if (!preg_match($this->emailRegex, $email)) {
                array_push($this->errors, 'Ingrese un email valido');
            }
            else {
                $user = $this->model_users->find_one_user_by_email($email);

                if (!empty($user)) {
                    array_push($this->errors, 'El email ya está registrado, intenté con otro');
                }
            }

            if (empty($password)) {
                array_push($this->errors, 'Ingrese una contraseña');
            }
            else if ($password != $confirmPassword) {
                array_push($this->errors, 'Las constraseñas no son iguales');
            }

            return $this->errors;

        }

    };