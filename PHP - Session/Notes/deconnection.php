<?php
    require_once("action/deconnectionAction.php");

    $data = execute();

    require_once("partial/header.php");

    ?>
    Vous êtes déconnecté...
    <?php
    require_once("partial/footer.php");