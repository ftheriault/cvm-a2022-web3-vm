<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i = 0; $i < 10; $i++) {
				?>
				<div style='color:red;'>
					salut <?= $i ?>
				</div>
				<?php
			}
		?>

		<?php
			for ($i=0; $i < 10; $i++) { 
				?>
				<div>
					salut <?= $i ?>
				</div>
				<?php
			}
		?>

		<?php
			$i = 10;

			while ($i > 0) {
				$i--;
				echo $i;
			}
		?>

		<?php
			$tab = []; // array();

			$tab[] = "élément 1"; // comme un push
			$tab[] = "élément 2"; // comme un push

			// echo $tab;
			var_dump($tab); // echo pour les structures complexes

			foreach ($tab as $element) {
				?>
				<div>
					<?= $element ?>
				</div>
				<?php
			}
		?>
	</body>
</html>







