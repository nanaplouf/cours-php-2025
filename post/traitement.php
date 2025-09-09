<?php
    require_once __DIR__ . '/../partials/head.php';
    var_dump($_POST);

    // !empty = si tu existe ET que t'es pas vide alor : 
    if(!empty($_POST['name'])){
        $name = htmlspecialchars($_POST['name']);
        echo "<h1>Bonjour $name !</h1>";
    }else{
        echo "<h1>Erreur dans le formulaire</h1>";
    }
?>


<?php
    require_once __DIR__ . '/../partials/footer.php';
?>