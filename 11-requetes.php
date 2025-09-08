<?php 
    require_once 'partials/head.php';
?>
    <h1>Les requêtes HTTP</h1>
    <h2>Qu'est-ce que HTTP</h2>
    <p>HTTP (HyperText Transfer Protocol) est un protocole de communication utilisé pour envoyer et recevoir des informations sur le web. Il fonctionne selon un modèle client-serveur, où le client envoie une requête et le serveur répond avec la ressource demandée.</p>
    <p><strong>Client :</strong> Généralement un navigateur web qui envoie une requête pour une ressource.</p>
    <p><strong>Serveur :</strong> Héberge les ressources demandées et répond aux requêtes des clients.</p>

    <hr>

    <h2>Structure de la requête HTTP</h2>
    <pre><code>GET /index.html HTTP/1.1</code></pre>
    <p><strong>Méthode HTTP :</strong> Le type d'opération à effectuer (GET, POST, PUT, DELETE, etc.).</p>
    <p><strong>URI (Uniform Resource Identifier) :</strong> L'adresse de la ressource demandée.</p>
    <p><strong>Version HTTP :</strong> La version du protocole HTTP utilisée.</p>

    <hr>

    <h2>En-têtes de requête</h2>
    <p>Les en-têtes fournissent des informations supplémentaires sur la requête. Ils sont facultatifs mais souvent utilisés pour transmettre des données importantes.</p>

    <p>Exemple d'en-têtes courants :</p>
    <ul>
        <li><strong>Host :</strong> Indique le nom de domaine du serveur.</li>
        <li><strong>User-Agent :</strong> Fournit des informations sur le client (navigateur, version).</li>
        <li><strong>Accept :</strong> Spécifie les types de médias que le client peut traiter (HTML, JSON, XML, etc.).</li>
        <li><strong>Authorization :</strong> Utilisé pour transmettre des informations d'authentification.</li>
    </ul>

    <h2>Le corps de la requête</h2>
    <p>Il est utilisé principalement avec les méthodes POST et PUT pour envoyer des données au serveur (comme les données d'un formulaire).</p>
    <p>Le corps de la requête est facultatif et souvent vide pour les méthodes comme GET.</p>
    <p>Exemple de données de formulaire avec POST :</p>
    <pre><code>username=john&password=jdjdiezlaldjdkd</code></pre>
    <p>on peut très bien utiliser les paramètres d'url avec POST, mais c'est très déconseillé</p>

    <h2>GET</h2>
    <a href="/get/affichage.php">La méthode Get</a>
<?php 
    require_once 'partials/footer.php';
?>