<?php
    require_once("action/resultsAction.php");

    $data = execute();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wack a mole</title>
        <link rel="stylesheet" href="css/global.css">
        <script src="js/sprites/Mole.js"></script>
        <script src="js/sprites/Tractor.js"></script>
        <script src="js/javascript.js"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="images/logo.png" alt="Logo" height="50">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Jeu</a></li>
                    <li><a href="results.php">Résultats</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <div class="results-container">
                <h1>
                    Résultats
                </h1>
                
                <?php
                    foreach($data["lines"] as $line) {
                        ?>
                        <div><?= $line ?></div>                        
                        <?php
                    }
                ?>
            </div>
        </div>
    </body>
</html>