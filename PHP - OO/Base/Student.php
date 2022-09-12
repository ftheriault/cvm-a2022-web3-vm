<?php
    require_once("User.php");
    
    class Student extends User {
        private $session;

        public function __construct($firstName, $lastName, $session) {
            parent::__construct($firstName, $lastName); // super
            $this->session = $session;
        }

        public function getFullName() {
            return parent::getFullName() . "(" . $this->session . ")";
        }
    }