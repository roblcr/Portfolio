<?php


// méthodes classiques
// require __DIR__ . '/includes/load-assets.php';

// chargement automatique des fichiers se trouvant dans le fichier include
$files = glob(__DIR__ . '/includes/*.php');

foreach($files as $file) {
    require $file;
}

