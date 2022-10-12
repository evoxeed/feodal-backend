<?php
    class Chat {
        function __construct($db) {
            $this->db = $db;
        }

        public function sendMessange($from, $to, $messange) {
            return 'sendMessange';
        }

        public function getMessanges($to) {
            return 'getMessanges';
        }
    }