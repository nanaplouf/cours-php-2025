<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <h1>Les dates en PHP</h1>
    <?php
        $today = date('d/m/Y h-i-s');
        echo "<p>$today - date() retourne la date de maintenant selon le format indiqué. d pour jour, m pour mois, Y pour année sur 4 chiffres, y pour année sur 2 chiffres, H pour heure sur 24h, h pour heure sur 12h, i pour minute et s pour seconde.</p>";

        $date = date('Y-m-d');
        echo "<p>On peut changer l'ordre des paramètres ainsi que le séparateur voilà la date du jour $date</p>";
    ?>
    <h2>Le timestamp</h2>
    <p>Le timestamp est le nombre de secondes écoulées entre une certaine date et le 1er janvier 1970 à 00:00:00. Cette date correspond à la création du système UNIX.</p>
    <p>Ce système de timestamp est utilisé par de nombreux langages de programmation dont le PHP et le JavaScript.</p>

    <?php
    $time = time();
        // retourne l'heure actuelle en timestamp
        echo "<p> $time </p>";
    ?>
    <h2>Changer le format d'une date (méthode procédurale)</h2>
    <p>transforme la date exprimée en string en timestamp</p>
    <?php
        $dateJour = strtotime('27-09-2018');
        echo "<p>Ma date passé $dateJour </p>";
        $dateFormat = date('Y', $dateJour);
        echo "<p>la date avec le format : $dateFormat</p>"
    ?>
    <h2>Changer le format d'une date (méthode objet)</h2>
    <?php
        $mydate = new DateTime('11/04/2017');
        echo "<p>Voilà formaté : ".$mydate->format('Y-m-d')."</p>";
    ?>
</body>
</html>