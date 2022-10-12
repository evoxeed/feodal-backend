<?php
    class User {
        function __construct($db) {
            $this->db = $db;
        }

        public function login($login,$password) {
            return 'login';
            }

        public function registration($login,$password,$name) {
            return 'registration';
        }

        public function logout($value) {
            return 'logout';
        }

        function getUser($token) {
            return true;
        }
    }