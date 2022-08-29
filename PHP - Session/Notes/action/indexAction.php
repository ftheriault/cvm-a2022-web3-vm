<?php
	session_start();

	function execute() {
		// $email = !empty($_SESSION["courriel"]) ? $_SESSION["courriel"] : null;
		$email = $_SESSION["courriel"] ?? null;
		$connectionError = false;
		
		if (isset($_POST["courriel"]) && isset($_POST["motDePasse"])) {
			if ($_POST["courriel"] === "test@test.com" &&
				$_POST["motDePasse"] === "test") {

				$_SESSION["estConnecte"] = true;
				$_SESSION["courriel"] = $_POST["courriel"];

				$email = $_POST["courriel"];
			}
			else {
				$connectionError = true;
			}
		}
		
		return compact("email", "connectionError");
	}