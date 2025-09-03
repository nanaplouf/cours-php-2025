<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <h1>Les conditions</h1>
    <?php
        $a = 10; $b = 5; $c = 2;

        //Si la condition est évaluée à TRUE, on exécute les accolades qui suivent :
        if($a > $b){
            echo '<p>$a est supérieur à $b.</p>';
        }else{ // Sinon... si la condition est évaluée à false, on exécute le else :
            echo '<p>Non, c\'est $b qui est supérieur ou égal à $a.</p>';
        }

        //Si $a est supérieur à $b ET que dans le même temps $b est supérieur à $c, alors on entre dans les accolades :
        if(($a > $b) && ($b > $c)){
            echo '<p>OK pour les 2 conditions </p>';
        }

        //Si $a est supérieur à $b ET que dans le même temps $b est supérieur à $c, alors on entre dans les accolades :
        if(($a > $b) AND ($b > $c)){
            echo '<p>OK pour les 2 conditions </p>';
        }

        //Si $a est égal à 9 (opérateur ==) OU que $b est supérieur à $c, alors on entre dans les accolades :
        if(($a == 9) || ($b > $c)){
            echo '<p>OK pour au moins une des 2 conditions </p>';
        }

        //Si $a est égal à 9 (opérateur ==) OU que $b est supérieur à $c, alors on entre dans les accolades :
        if(($a == 9) OR ($b > $c)){
            echo '<p>OK pour au moins une des 2 conditions </p>';
        }


        if($a == 8){
            echo '<p>$a est égal à 8</p>';
        }elseif($a != 10){
            echo '<p>$a n\'est pas égal à 10</p>';
        }else{
            echo '<p>Les 2 conditions précédentes sont fausses </p>';
        }

        // XOR ou OU exclusif : 
        //Seulement une des 2 conditions doit être vraie (soit l'une ou soit l'autre). 
        //Si les 2 conditions sont vraies, alors l'expression complète est fausse : c'est le cas ici, on entre donc dans le else
        
        $question1 = 'mineur';
        $question2 = 'je vote';

        if(($question1 == 'mineur') XOR ($question2 == "je vote")){
            echo '<p>Vos réponses sont cohérentes.</p';
        }else{
            echo '<p>Vos réponses ne sont pas cohérentes.</p>';
        }
    ?>
    <h2>Les ternaires</h2>
    <?php
        echo '<p>($a == 10) ? $a est égal à 10: $a est différent de 10 </p>';
        $result = ($a == 10) ? '$a est égale à 10' : '$a est different de 10';

        echo "<p>$result</p>";

        if($a == 10){
            echo '<p>$a est égal à 10 </p>';
        }else{
            echo '<p>$a est différent de 10 </p>';
        } 
    ?>
    
    <h2>== et ===</h2>
    <?php
        $varA = 1;
        $varB = '1';

        if ($varA == $varB) echo '<p>$varA est égal à $varB en valeur uniquement </p>';

        if ($varA === $varB) {
            echo '<p>$varA est égal à $varB en valeur ET en type</p>';
        } else {
            echo '<p>$varA est différent de $varB en valeur ou en type</p>';
        }
    ?>
    
    <h2> Condition switch </h2>
<?php
    $couleur = 'jaune';

    switch ($couleur) {
        case 'bleu' : 
            echo '<p>Vous aimez le bleu </p>';
        break;  // break est obligatoire pour quitter la condition une fois le case exécuté
        
        case 'rouge' :
            echo '<p>Vous aimez le rouge </p>';
        break;  
    
        case 'vert' :
            echo '<p>Vous aimez le vert </p>';
        break; 
    
        default:  // cas par défaut si on n'entre pas dans les cases précédents (équivalent du else)
            echo '<p>Vous n\'aimez aucune de ces couleurs </p>';
        break;    
    }
?>
</body>
</html>