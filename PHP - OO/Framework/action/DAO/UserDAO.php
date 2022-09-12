<?php
    
    class UserDAO {

        public static function authenticate($username, $password) {
            $result = null;

            if ($username == "john" && $password == "qwerty") {
                $result = [
                    "username" => "john",
                    "visibility" => 1
                ];
            }

            return $result;
        }
    }