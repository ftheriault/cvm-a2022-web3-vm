<?php
    
    function execute() {
        $hasEmailSent = !empty($_GET["show-msg"]);

        if (!empty($_POST["name"])) {
            $line = $_POST["name"] . ";" . $_POST["course"] . ";" . $_POST["message"] . "\n";
            file_put_contents("data/inscriptions.txt", $line, FILE_APPEND);
            //mail("owner@magic.com", "Nouvelle inscription", "sdffasdff")
            header("location:inscription.php?show-msg=1");
            exit;
        }

        return compact("hasEmailSent");
    }