<!-- footer.php -->
<footer>

<div class="context">
        <h2>Dernières Contributions :</h2>
        <h3>Vous aussi participez à faire vivre cette aventure !! Via le formulaire de contact</h3>
        <?php
        // Chemin vers le fichier bdd.txt
        $file = 'bdd.txt';

        // Vérifier si le fichier existe et peut être lu
        if (file_exists($file) && is_readable($file)) {
            // Lire le contenu du fichier dans une seule chaîne
            $contents = file_get_contents($file);

            // Séparer les contributions en utilisant le séparateur double saut de ligne "\n\n"
            $contributions = explode("\n\n", $contents);

            // Parcourir chaque contribution
            foreach ($contributions as $contribution) {
                // Séparer chaque ligne de contribution en utilisant "\n"
                $lines = explode("\n", $contribution);

                // Initialiser les variables pour chaque contribution
                $civilite = '';
                $nom = '';
                $email = '';
                $raison = '';
                $message = '';

                // Parcourir chaque ligne et extraire les données pertinentes
                foreach ($lines as $line) {
                    if (strpos($line, 'Civilité:') !== false) {
                        $civilite = trim(str_replace('Civilité:', '', $line));
                    } elseif (strpos($line, 'Nom:') !== false) {
                        $nom = trim(str_replace('Nom:', '', $line));
                    } elseif (strpos($line, 'Email:') !== false) {
                        $email = trim(str_replace('Email:', '', $line));
                    } elseif (strpos($line, 'Raison de contact:') !== false) {
                        $raison = trim(str_replace('Raison de contact:', '', $line));
                    } elseif (strpos($line, 'Message:') !== false) {
                        $message = trim(str_replace('Message:', '', $line));
                    }
                }

                // Afficher les données de la contribution si elles sont valides
                if (!empty($civilite) && !empty($message)) {
                    echo "<p>$civilite $nom</p>";
                    echo "<p>$message</p>";
                    echo "<hr>";
                }
            }
        } else {
            echo "<p>Aucune contribution trouvée.</p>";
        }
        ?>
    </div>
    <p class="footext">© 2024 Avian-Spark-Tales. Tous droits réservés.</p>
</footer>
</body>
</html>