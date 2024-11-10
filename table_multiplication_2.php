<?php
// je lie la page 'TableMultiplication.php' à la page actuelle pour bénéficier de la classe
require 'TableMultiplication.php';

// je crée une nouvelle instance, de l'objet '$tableMultiplication' qui se base sur la classe 'TableMultiplication'
$tableMultiplication = new TableMultiplication;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Multiplication 2</title>

    <style>
        /* style CSS */
        table {
            border-collapse: collapse;
            border: 2px solid black;
            width: 500px;
            height: 500px;
            margin: auto;
            margin-top: 50px;
        }
        tr {
            text-align: center;
        }
        th {
            border: 1px solid black;
        }
        td {
            background: black;
            color: white;
            border: 1px solid white;
            width: 45px;
        }
    </style>
</head>
<body>
    <!-- je crée une table -->
    <table>
        <!-- je crée la première ligne de ma table -->
        <tr>
            <!-- je crée la première case de ma table -->
            <th>Mult.</th>
            <!-- je crée une boucle for() qui dit que :
                - j'affecte à la variable '$i' la valeur '1'
                - tant que la variable '$i' est inférieure ou égale à la valeur retournée par la fonction 'getColonnes()' de la classe à laquelle fait référence l'objet '$tableMultiplication', je continue la boucle
                - à chaque tour de boucle j'incrémente la valeur de la variable '$i' de '1' -->
            <?php for ($i = 1; $i <= $tableMultiplication->getColonnes(); $i++) : ?>
                <!-- à chaque tour de boucle, j'affiche la valeur de la variable '$i' -->
                <th><?php echo $i; ?></th>
                <!-- je stop la boucle for -->
                <?php endfor; ?>
        <!-- je ferme la première la première rangée -->
        </tr>
        <!-- je crée une nouvelle boucle 'for()' qui dit que :
            - j'affecte à la variable '$j' la valeur '1'
            - tant que la variable '$i' est inférieure ou égale à la valeur retournée par la fonction 'getRangees()' de la classe à laquelle fait référence l'objet '$tableMultiplication', je continue la boucle
            - à chaque tour de boucle j'incrémente la valeur de la variable '$i' de '1' -->
        <?php for ($j = 1; $j <= $tableMultiplication->getRangees(); $j++) : ?>
            <!-- à chaque tour de boucle, j'affiche la valeur actuelle de la variable '$j' dans la première cellule de la nouvelle ligne du tableau -->
            <tr><th><?php echo $j; ?></th>
            <!-- je crée une nouvelle boucle for qui reprend la même logique les précédentes -->
            <?php for ($k = 1; $k <= $tableMultiplication->getColonnes(); $k++) : ?>
                <!-- à chaque tour de boucle, j'affiche le produit de la multiplication de la valeur actuelle de la variable '$k' et de la variable '$j' -->
                <td><?php echo $k * $j; ?></td>
                <!-- je stop la boucle 'for()' -->
                <?php endfor; ?>
            </tr>
        <!-- je stop la boucle 'for()' qui englobait la boucle 'for()' précédente -->
        <?php endfor; ?>
    </table>
</body>
</html>