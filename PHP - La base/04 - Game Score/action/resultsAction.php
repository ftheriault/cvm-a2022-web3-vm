<?php
    
    function execute() {
        $lines = file_get_contents("results.txt");
        $lines = explode("\n", $lines); // un string devient un tableau de lignes

        return compact("lines");
    }