<?php
    
    class User {
        private $firstName;
        private $lastName;

        // this+enter = $this->
        public function __construct($firstName, $lastName) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        public function getFullName() {
            return $this->firstName . " " . $this->lastName;
        }
    }