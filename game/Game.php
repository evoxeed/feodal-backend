<?php
    class Game {
        function __construct($db) {
            $this->db = $db;
        }

        public function getMap($user) {
            return 'Map';
        }

        public function getScene($user) {
            return 'Scene';
        }

        public function getCastle($user) {
            return 'Castle';
        }

        public function command($user, $command) {
            return $command;
        }
    }