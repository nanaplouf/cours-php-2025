<?php
    require_once __DIR__ . '/../partials/head.php';
    echo '<pre>';    
    var_dump($_GET);
    echo '</pre>';
    $article = htmlspecialchars($_GET['article']);
    $couleur = htmlspecialchars($_GET['couleur']);
    $prix = htmlspecialchars($_GET['prix']);

?>
    <h1>Détail du produit</h1>
    <?php
    if(isset($_GET['article']) AND isset($_GET['couleur']) AND isset($_GET['prix'])){
        ?>
            <h2>Article <?= $article ?></h2>
            <p>Couleur <?= $couleur ?></p>
            <p>Prix <?= $prix ?></p>
        <?php
    } else{
        ?>
            <p>Ce produit n'existe pas !</p>
        <?php
    };
    ?>

<?php
    require_once __DIR__ . '/../partials/footer.php';
?>