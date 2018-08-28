<?php
//strtotime est une fonction qui permet d'aller vers la date que l'on veut.
$nextDay = strtotime('-22days');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8/9</title>
    </head>
    <body>
        <p>
            <?php
            //Affichage de la date
            echo date('d/m/Y', $nextDay);
            ?>
        </p>
    </body>
</html>