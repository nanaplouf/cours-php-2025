<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles</title>
</head>
<body>
    <h1>Les boucles en PHP</h1>
    <p>Les boucles sont destinées à répéter des lignes de codes de façon automatique.</p>
    <h2>Les boucles while</h2>
    <?php
        $i = 4;
        while($i <= 3){
            $i++;
            echo "<p>$i</p>";
        }
    ?>
    <h2>La boucle do ... while</h2>
    <p>La boucle do while a la particularité de s'exécuter au moins une fois (correspondant à "do"), puis tant que la condition while est vraie.</p>
    <?php
        // Exemple d'utilisation : poser une question à l'internaute une première fois avec le "do", puis tant qu'il n'a pas répondu avec le "while".
        $j = 4;
        do{
            echo "<p>Je fais un tour de boucle</p>";
            $j++;
        }while($j <= 3);
    ?>
    <h2>La boucle for</h2>
    <p>La boucle for est une autre syntaxe de la boucle while.</p>
    <?php
        for($i = 0; $i < 10 ; $i++){
            echo "<p>$i</p>";
        }
    ?>
    <h2>La boucle foreach</h2>
    <p>La boucle foreach est un moyen simple de passer en revue un tableau ou un objet. Elle retourne une erreur si vous tentez de l'utiliser sur autre chose.</p>
    <?php
        $tab = ['azertyuiop', 'AZERTYUIOP', true, 2.09];
        print_r($tab);

        // le mot clé "as" fait partie de la structure syntaxique de la foreach : il est obligatoire. 
        //$valeur vient parcourir la colonne des valeurs de l'array. 
        //Notez qu'on peut l'appeler comme on veut : c'est sa place après "as" qui détermine qu'elle parcourt les valeurs.

        foreach($tab as $valeur){
            echo "<p>$valeur</p>";
        }

        foreach($tab as $indice => $valeur){
            echo "<p>$indice correspond à $valeur</p>";
        }
    
    ?>

</body>
</html>