<?php
	require_once("action/secretAction.php"); // Chercher le contrôleur

	$data = execute();

    require_once("partial/header.php");
?>
<div>
    <?php
        foreach ($data["spies"] as $spy) {
            ?>
            - <?= $spy ?><br>
            <?php
        }
    ?>
</div>
<?php
	require_once("partial/footer.php");