<?php
    require_once("action/ContactAction.php");

    $action = new ContactAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
Pour nous contacter......
<?php
    require_once("partial/footer.php");