<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00 Les bases</title>
</head>
<body>
    <h1>Cours 00 Les bases</h1>
    <?php 
        //je peux faire du PHP
        echo '<p>Les balises</p>';
    ?>
    <p>
        Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP on utilise : < ?php pour le refermer on utilise ?>.
        En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
    </p>

    <?php
        echo '<p>echo est une instruction qui permet d\'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML.</p>';
    ?>

    <h3>Différents affichage</h3>
    <?php
        echo '<p>Ici c\'est un echo</p>';
        print '<p>Ici c\'est un print</p>';
    ?>

    <p>echo accepte plusieurs arguments et ne retourne aucune valeur.</p>
    <?php
        echo '<p>1er valeurs</p>', '<p>2éme valeurs</p>';
        print '<p>La différence majeure avec echo est que print n\'accepte qu\'un seul argument et retourne toujours 1.</p>';
    ?>
    
    <h3>D'autres affichages</h3>
    <ul>
        <li>print_r, affiche des informations à propos d'une variable, de manière à ce qu'elle soit lisible.</li>
        <li>var_dump, affiche les informations structurées d'une variable, y compris son type et sa valeur.</li>
    </ul>
    <h4>Print_r</h4>
    <?php
        $maVariable = 'Hello';
        print_r($maVariable);
    ?>

    <h4>var_dump</h4>
    <?php
        $maVariable1 = 1;
        var_dump($maVariable1);
    ?>
</body>
</html>