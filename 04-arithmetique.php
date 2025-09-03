<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'arithmetique</title>
</head>
<body>
    <h1>L'arithmetique en PHP</h1>
    <h2>Opérateurs</h2>
    <?php
        $a = 10;
        $b = 2;
        echo "<p>Ma variable a = $a et ma variable b = $b</p>";

        $total = $a + $b;
        echo "<p>Ma variable a + ma variable b = $total</p>";
        
        $total = $a - $b;
        echo "<p>Ma variable a - ma variable b = $total</p>";

        $total = $a * $b;
        echo "<p>Ma variable a x ma variable b = $total</p>";

        $total = $a / $b;
        echo "<p>Ma variable a ÷ ma variable b = $total</p>";

        $total = $a % $b;
        //Modulo = reste de la division entière. 
        //Exemple 3%2 = si on a 3 billes réparties entre 2 personnes, il nous en reste 1 dans la main 
        echo "<p>Le modulo de ma variable a et ma variable b = $total</p>";
    ?>

    <h2>Opération et affectation combinées</h2>

    <?php
        $c = 10;
        $d = 2;

        $c += $d;
        //Ca équivaut à $c = $c + $d, donc $c vaut au final 12
        echo "<p>Le total de ma variable c'est = $c</p>";

        $c -= $d;
        //Ca équivaut à $c = $c - $d, donc $c vaut au final 10
        echo "<p>Maintenant le total de ma variable c est = $c</p>";

        $c *= $d;
        //Ca équivaut à $c = $c * $d, donc $c vaut au final 20
        echo "<p>Maintenant le total de ma variable c est = $c</p>";

        $c /= $d;
        //Ca équivaut à $c = $c / $d, donc $c vaut au final 10
        echo "<p>Maintenant le total de ma variable c est = $c</p>";

        $c %= $d;
        //Ca équivaut à $c = $c % $d, donc $c vaut au final 0
        echo "<p>Maintenant le total de ma variable c est = $c</p>";
    ?>
    <h2>Incrémenter et décrémenter</h2>
    <?php
        $i = 0;
        $i++; // On ajoute 1 à $i qui vaut au final 1
        $i--; // On retire 1 à $i qui vaut au final 0

        echo '<p>$i++;</br>// on ajoute 1 à $i qui vaut au final 1</p>';
        echo '<p>$i--;</br>// on soustrait 1 à $i qui vaut au final 0</p>';

        $i = 0;
        ++$i; // On ajoute 1 à $i qui vaut au final 1
        --$i; // On retire 1 à $i qui vaut au final 0

    ?>
</body>
</html>