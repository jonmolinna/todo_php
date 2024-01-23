<?php

    class UsersModels extends Model {
        public function get($email='') {
            $this->query = $email != '' ? "SELECT * FROM users WHERE email = '$email'" : "SELECT * FROM users";

            $this->get_query();

            $num_rows = count($this->rows);

            $data = array();

            foreach($this->rows as $key => $value) {
                array_push($data, $value);
            }

            return $data;
        }

        public function add($body = array()) {
            foreach ($body as $key => $value) {
                $$key = $value;
            }

            $this->query = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$password')";
            $this->set_query();
        }

        public function find_one_user_by_email($email) {
            $this->query = "SELECT * FROM users WHERE email = '$email'";
            $this->get_query();

            $data = array();

            foreach ($this->rows as $key => $value) {
                array_push($data, $value);
            }

            return $data;
        }

        public function update() {}
        public function delete() {}
    }