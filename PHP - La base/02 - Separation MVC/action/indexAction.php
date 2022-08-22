<?php
    
    function execute() {
        $hasError = false;
        $username = "asdf";

        if (!empty($_POST["champCourriel"]) && !empty($_POST["champMotDePasse"])) {
            if ($_POST["champCourriel"] == "test@test.com" && 
                $_POST["champMotDePasse"] == "test") {
                header("location:secret.php");
                exit;
            }
            else {
                $hasError = true;
            }
        }

        return compact("hasError", "username"); // Fait un dictionnaire
        // $data["username"], $data["hasError"]
    }