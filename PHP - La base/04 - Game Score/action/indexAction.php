<?php
    
    function execute() {
        if (!empty($_POST["pointage"])) {
            $line = date("Y-m-d H:i:s") . " - " . ($_POST["pointage"]/1000) . " sec.\n";
            file_put_contents("results.txt", $line, FILE_APPEND);
        }
    }