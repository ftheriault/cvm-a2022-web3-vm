<?php
	/* */
	# 
	// phpt = php tags
?>
<?php 
	$username = false;
	$username = 0;

	if ($username == "John") {
		// concaténation = ., pas +
		$username = $username . " Smith";
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Variables</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php 
			if (1 == 2) {
				echo "123";
			}
			else {
				echo "456";
			}
		?>
		Nom : <?php echo $username ?><br/>
		Nom : <?= $username ?> (phpe = php echo)
	</body>
</html>







