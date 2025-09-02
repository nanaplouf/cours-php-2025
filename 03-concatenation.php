<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenation</title>
</head>
<body>
    <h1>La concatenation</h1>
    <?php
        $x = "Bonjour";
        $y = "tout le monde !";

        echo '<p>' . $x . ' ' . $y .'</p>';

        // Dans l'instruction echo on peut séparer les éléments à afficher par une virgule. 
        // Cette syntaxe est spécifique à echo et ne marche pas avec print.
        echo '<p>' , $x , ' ' , $y ,'</p>';

        //Ici je créer une variable prenom je lui donne la valeur Pauline
        $prenom = "Pauline";

        //Ici j'appel ma variable prenom je lui donne une nouvelle valeur
        $prenom = "Priscille";

        // Ici j'affiche la valeur de ma variable prenom
        echo '<p>' . $prenom . '</p>';
    ?>
    <h2>Les guillemets et les quotes</h2>
    <?php
        //On échappe les apostrophes dans les quotes simples avec \ (altGr + 8)
        $message = 'aujourd\'hui';
        //Ou bien
        $messageBis = "aujourd'hui";

        //Dans des quotes simples, la variable n\'est pas évaluée, elle est traitée comme du texte brut.
        echo '<p>$message</p>';
        
        //Dans les guillemets, la variable est évaluée : c\'est son contenu qui est affiché
        echo "<p>$messageBis</p>";
    ?>
</body>
</html>