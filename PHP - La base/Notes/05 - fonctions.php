<?php
	function hasher($mot, $mot2 = "") {
		$motFinal = $mot . $mot2;

		return sha1($motFinal);
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<?= hasher("allo") ?><br>
		<?= hasher("allo") ?><br>
		<?= hasher("allo", "toi") ?>
	</body>
</html>







