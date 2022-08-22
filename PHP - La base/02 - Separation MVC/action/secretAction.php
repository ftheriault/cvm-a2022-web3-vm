<?php
    
    function execute() {
        $spies = [];

        $spies[] = "Ethan Hunt";
        $spies[] = "James Bond";

        return compact("spies"); // dictionnaire vide
    }