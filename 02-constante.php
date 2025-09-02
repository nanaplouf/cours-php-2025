<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les constantes</title>
</head>
<body>
    <h1>Les constantes en PHP</h1>
    <?php
        echo '<p>Une constante permet de conserver une valeur sauf que celle-ci ne peut pas être modifiée durant l\'exécution du ou des scripts. Utile pour par exemple conserver les paramètres de connexion à la BDD sans pouvoir les modifier une fois définis.</p>';
        echo '<p>Par convention les constantes sont toujours écrites en majuscules. </br>
        On déclare une constante avec la fonction prédéfinie define()</p>';

        //Ici on déclare une constante du nom de CAPITAL avec la valeur Paris
        define('CAPITAL', 'Paris');

        //Ici on affiche la valeur de la constante CAPITAL
        echo '<p>' . CAPITAL . '</p>';
    ?>
    <h2>Constante magique</h2>
    <?php
        echo '<p>Il y a neuf constantes magiques qui changent suivant l\'emplacement où elles sont utilisées.</p>';

        // Affiche le chemin complet vers le dossier de notre fichier
        echo __DIR__ . '</br>';

        // Affiche le chemin complet vers le fichier (dossier + nom du fichier)
        echo __FILE__ . '</br>';
    ?>
    <button type="button" class="btn btn-dark mt-5">
        <a href="https://www.php.net/manual/fr/language.constants.magic.php#constant.dir">Documentation PHP</a>
    </button>
</body>
</html>