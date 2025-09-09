<?php
    require_once __DIR__ . '/../partials/head.php';
?>
    <h1>Formulaire</h1>

    <form action="traitement.php" method="post">
        <label for="name">Prénom:</label>
        <input type="text" name="name">
        <label for="message">Message:</label>
        <textarea name="message" rows="2"></textarea>
        <button type="submit">envoyer</button>
    </form>

<?php
    require_once __DIR__ . '/../partials/footer.php';
?>