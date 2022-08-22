<?php
	$txt = "";

	if (!empty($_GET["info"])) { // not undefined, not null, not "", not false, not zero
		$txt = $_GET["info"]; // $_POST["info"]
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="" method="get">
			<div>
				Info : <input type="text" name="info" value="<?= $txt ?>" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







