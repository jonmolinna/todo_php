<?php

    class ValidateAuth {
        private $model_users;
        public $errors = array();

        public function __construct() {
            $this->model_users = new UsersModels();
        }

        public function validar_auth($body = array()) {
            foreach($body as $key => $value) {
                $$key = $value;
            }

            if (empty($email)) {
                array_push($this->errors, 'Ingrese un email');
            }

            if (empty($password)) {
                array_push($this->errors, 'Ingrese una contraseña');
            }

            if (!empty($email) && !empty($password)) {
                $user = $this->model_users->find_one_user_by_email($email);

                if (empty($user)) {
                    array_push($this->errors, 'Credenciales Incorrectas');
                }
                else if (!password_verify($password, $user[0]["password"])) {
                    array_push($this->errors, 'Credenciales Incorrectas');
                    
                }
            }
            return $this->errors;
        }
    }