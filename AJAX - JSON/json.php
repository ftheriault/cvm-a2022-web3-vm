<?php
    $tab = array("k1" => "a", "clé2" => "b", "k3" => "c");
    $tab = json_encode($tab);
    echo $tab;
?>
<!DOCTYPE html>
<html>
	<head>
			<title>JSON</title>
			<meta charset="utf-8">
	</head>
	<body>
		<div>
            <script>
                let elem = '<?= $tab ?>';
                let tab = JSON.parse(elem);
                console.log(tab);
            </script>
		</div>
	</body>
</html>
