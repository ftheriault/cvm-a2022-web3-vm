<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Mon engin de courriels</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/global.css">
			<script>
				const checkEmails = () => {
					let formData = new FormData();
					formData.append("username", "ken");
					formData.append("password", "AAAaaa111");

					fetch("ajax.php", {
						method : "post",
						body: formData
					})
					.then(response => response.json()) // (JSON decode) Le résultat, fait un JSON.parse dessus
					.then(data => {
						let node = document.querySelector("#contenantCourriels");
						// node.innerHTML = data; // innerText
						// console.log(data);

						node.firstChild.remove();
						let textNode = document.createTextNode(data);
						node.append(textNode);
						console.log(2)
						setTimeout(checkEmails, 4000);
					})
					
					console.log(1)
				}		
				checkEmails();
			</script>
	</head>
	<body>
		<div class="container">
			<h1>Mes courriels</h1>
	
			<p>Vous avez actuellement</p>
			<div id="contenantCourriels">--</div> 
			<p>nouveaux courriels.</p>

			<div class="refresh-section">
				<button onclick="checkEmails()">
					<img src="images/refresh.png" alt="Rafraîchir">
				</button>
			</div>
		</div>
	</body>
</html>
