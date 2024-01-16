<?php

    abstract class Model {
        // Atributos
        private static $db_host = 'localhost';
        private static $db_user = 'root';
        private static $db_password = 'molina125';
        private static $db_name = 'todo_php';
        private $connection;
        protected $query;
        protected $rows = array();

        // Metodos Abstractos
        abstract protected function get();
        abstract protected function add();
        abstract protected function update();
        abstract protected function delete();

        // Metodos Privados
        private function db_open() {
            $this->connection = new mysqli(
                self::$db_host,
                self::$db_user,
                self::$db_password,
                self::$db_name,
            );
        }

        private function db_close() {
            $this->connection->close();
        }

        // QUERY INSERT, DELETE, UPDATE
        protected function set_query() {
            $this->db_open();
            $this->connection->query($this->query);
            $this->db_close();
        }
        
        // QUERY SELECT
        protected function get_query() {
            $this->db_open();

            $result = $this->connection->query($this->query);
            
            while ($this->rows[] = $result->fetch_assoc());

            $result->close();
            $this->db_close();

            return array_pop($this->rows);
        }

    }