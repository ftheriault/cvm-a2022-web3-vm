<?php
    require_once("action/DAO/Connection.php");
    
    class UserDAO {

        public static function authenticate($username, $password) {
            $connection = Connection::getConnection();
            
            // ' or 1=1 or '1'='1 <- sql injection
            $statement = $connection->prepare("SELECT * FROM users WHERE username = ?");
            $statement->bindParam(1, $username);
            // $statement->bindParam(2, $firstName);
            $statement->setFetchMode(PDO::FETCH_ASSOC); // Permet de faire des selects et retourner les données en dictionnaire
            $statement->execute();
            $result = null;

            if ($row = $statement->fetch()) {
                if (password_verify($password, $row["password"])) {
                    $result = [
                        "username" => $row["first_name"],
                        "visibility" => $row["visibility"],
                    ];
                }
            }

            // $statement->fetchAll(); // Retourne toutes les lignes dans un tableau

            return $result;
        }

        public static function incCounter() {
            $connection = Connection::getConnection();

            // Faire statement
            // Exécuter statement
            // Pas besoin de fetch, parce que update/insert/delete
        }
    }