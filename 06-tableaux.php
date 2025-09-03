<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
</head>
<body>
    <h1>Les tableau en PHP</h1>
    <p>Un tableau, ou array en anglais, est une variable améliorée dans laquelle on stocke une multitude de valeurs. 
        Ces valeurs peuvent être de n'importe quel type. 
        Elles possèdent un indice dont la numérotation par défaut commence à 0.</p>

    <?php
        // Déclaration d'un array (méthode 1) :
        $prenom = array('Balamini', 'Lamia');

        echo "<p>Ma variable prenom est un ". gettype($prenom) ."</p>";
        var_dump($prenom);

        echo "<p> print_r est plus synthétique que var_dump : il n'affiche pas le type des éléments contenus dans l'array</p>";
        echo print_r($prenom) . "<br>";

        // Déclaration d'un array (méthode 2) :
        $liste = ['Priscille', 'Ilyes', 'Kylian'];
        $liste[] = 'Catherine';// Les [] vides permettent d'ajouter une valeur à la fin de notre array

        var_dump($liste);
        echo "<p>Bonjour $liste[0] !</p>";
    ?>

    <h2>Les tableaux associatif</h2>
    <p>Un tableau associatif est un tableau dans lequel on choisit la dénomination des indices.</p>
    <?php
        $couleur = array(
            'j' => 'jaune',
            'b' => 'bleu',
            'v' => 'vert'
        );

        echo "<p>$couleur[j]</p>";

        echo "<p>count() et sizeof() font la même chose : ils comptent le nombre d'éléments contenus dans l'array indiqué</p>";
        echo '<p>Taille du tableau $couleur :' . count($couleur) . '</p>';
        echo '<p>Taille du tableau $couleur :' . sizeof($couleur) . '</p>';
    ?>

    <h2>Array multidimensionnel</h2>
    <p>Nous parlons de tableau multidimensionnel quand un tableau est contenu dans un autre tableau. Chaque tableau représente une dimension.</p>
    <?php
        $tab = [
            0 => [
                'prenom' => 'Julien',
                'nom'    => 'Dupon',
                'telephone' => '0601020304'
            ],
            1 => [
                'prenom' => 'Nicolas',
                'nom'    => 'Duran',
                'telephone' => '0601020304'
            ],
            2 => [
                'prenom' => 'Pierre',
                'nom'    => 'Dulac'
            ]
        ];

        $prenom = $tab[0]['prenom'];
        echo "<p> $prenom </p>";

        for($i = 0; $i < sizeof($tab); $i++){
            $prenomAff = $tab[$i]['prenom'];
            echo "<p>$prenomAff</p>";
        }
    ?>
</body>
</html>