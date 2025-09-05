<?php
    require_once 'partials/head.php';
?>

    <h1>Les inclusions</h1>
    <p>include \'exemple.inc.php\'; 
       le fichier dont le chemin est spécifié est inclus ici. 
       En cas d'erreur lors de l'inclusion du fichier, include génère une erreur de type warning 
       et continue l'exécution du script
    </p>
    <p>include_once \'exemple.inc.php\'; 
        Le once vérifie si le fichier a déjà été inclus. 
        Si c'est le cas, il ne le ré-inclut pas.
    </p>
    <p>require \'exemple.inc.php\'; 
        Le fichier est "requis" donc obligatoire : en cas d'erreur lors de l'inclusion du fichier, 
        require génère une erreur de type "fatal error" et stoppe l'exécution du script
    </p>
    <p>require_once \'exemple.inc.php\'; 
        Le once vérifie si le fichier a déjà été inclus. 
        Si c'est le cas, il ne le ré-inclut pas.
    </p>
<?php
    require 'partials/footer.php';
?>