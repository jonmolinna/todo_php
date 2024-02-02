<?php

    class AuthModels {
        private $model_users;

        public function __construct() {
            $this->model_users = new UsersModels();
        }

        public function authentication($email) {
            $user = $this->model_users->find_one_user_by_email($email);

            if (empty($user)) {
                $login_form = new ViewController();
                $login_form->load_view('login');
            }
            else {
                $_SESSION['ok'] = true;

                header('Location: ./');
            }
        }
    }