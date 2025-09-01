<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variables</title>
</head>
<body>
    <h1>Les variables en PHP</h1>
    <h2>Variable : déclaration / affectation / types</h2>

    <p>
        Définition : une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur. En PHP on déclare une variable avec le signe $.<br>
        Par convention, un nom de variable commence par une lettre minuscule, puis on met une majuscule à chaque mot. Il peut contenir des chiffres (jamais au début), ou un "_" (jamais au début car signification particulière en objet, ni à la fin).
    </p>

    <?php
        $maVariable = 127;
        print $maVariable;
        echo '<p>' . $maVariable . '</p>';

        echo '<p>gettype() est une fonction prédéfinie qui indique le type d\'une variable.</p>';

        echo gettype($maVariable);

        $a = 'Une chaine de caractères';
        $b = true;
        $c = '127';

        echo '<p>Ma variable $a = ' . $a . ' est de type : ' . gettype($a) . '</p>';
        echo '<p>Ma variable $b = ' . $b . ' est de type : ' . gettype($b) . '</p>';
        echo '<p>Ma variable $c = ' . $c . ' est de type : ' . gettype($c) . '</p>';
    ?>
</body>
</html>