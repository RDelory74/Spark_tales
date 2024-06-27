<!-- footer.php -->
<footer>

<p class="footext">
        <?php if (isset($_SESSION['civilite'], $_SESSION['name'], $_SESSION['message'])): ?>
            <h3>Dernière Contribution :</h3>
            <p><strong>Civilité :</strong> <?= htmlspecialchars($_SESSION['civilite']) ?></p>
            <p><strong>Nom :</strong> <?= htmlspecialchars($_SESSION['name']) ?></p>
            <p><strong>Message :</strong><br><?= nl2br(htmlspecialchars($_SESSION['message'])) ?></p>
        <?php endif; ?>
        </p>
        <p class="footext">© 2024 Avian-Spark-Tales. Tous droits réservés.</p>
    </footer>
</body>
</html>