<!-- contact.php -->
<?php
$title = "Contacter Avian";
include('header.php'); ?>

<main>
    <h2 class="Hfamily">Influez l'avenir de l'histoire d'Avian</h2>
    <p class="fontext">
        <?php
        if (isset($_SESSION['errors'])) {
            echo htmlspecialchars($_SESSION['inforegist']);
            echo htmlspecialchars($_SESSION['errors']);
            unset($_SESSION['errors']); // On efface les erreurs après les avoir affichées
        } else {
            echo "Par le biais de ce formulaire vous pouvez orienter, en soumettant vos avis et idées, l'avenir d'Avian dans son aventure.";
        }
        ?>
    </p>



    <form class="contact-form" action="traitement_formulaire.php" method="post">
        <label class="form-label" for="civility">Civilité :</label>
        <select class="form-select" id="civility" name="civility">
            <option value="" <? empty($_SESSION['civilite']) ? 'selected' : '' ?>>Sélectionnez votre civilité</option>
            <option value="Mr" <?= isset($_SESSION['civilite']) && $_SESSION['civilite'] == 'Mr' ? 'selected' : '' ?>>Monsieur</option>
            <option value="Mrs" <?= isset($_SESSION['civilite']) && $_SESSION['civilite'] == 'Mrs' ? 'selected' : '' ?>>Madame</option>
            <option value="Miss" <?= isset($_SESSION['civilite']) && $_SESSION['civilite'] == 'Miss' ? 'selected' : '' ?>>Mademoiselle</option>

        </select>

        <label class="form-label" for="name">Nom :</label>
        <input class="form-input" type="text" id="name" name="name" value="<?= isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : '' ?>" required pattern="^[A-Za-z '-]+$" maxlength="20">

        <label class="form-label" for="email">Email :</label>
        <input class="form-input" type="email" id="email" name="email" value="<?= isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : '' ?>" required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z.]{2,}$">

        <fieldset class="form-radio">
            <legend>Quel est le but de ton message ?</legend>
            <div>
                <input type="radio" id="Raison" name="Raison" value="nouvel heros" <?= isset($_SESSION['Raison']) && $_SESSION['Raison'] == 'nouvel heros' ? 'checked' : '' ?> />
                <label class="form-radio" for="Raison">Je veux changer de Heros</label>
            </div>

            <div>
                <input type="radio" id="Raison" name="Raison" value="nouvelle histoire" <?= isset($_SESSION['Raison']) && $_SESSION['Raison'] == 'nouvelle histoire' ? 'checked' : '' ?> />
                <label class="form-radio" for="Raison">Je veux changer le cours de l'histoire</label>
            </div>

            <div>
                <input type="radio" id="Raison" name="Raison" value="nouvelle idée" <?= isset($_SESSION['Raison']) && $_SESSION['Raison'] == 'nouvelle idée' ? 'checked' : '' ?> />
                <label class="form-radio" for="Raison">J'ai une super bonne idée</label>
            </div>
        </fieldset>

        <label class="form-label" for="message">Message :</label>
        <textarea class="form-textarea" id="message" name="message" rows="6" minlength="5"><?= isset($_SESSION['message']) ? htmlspecialchars($_SESSION['message']) : '' ?></textarea>

        <input class="form-submit" type="submit" value="Envoyer">
    </form>
</main>

<?php include('footer.php'); ?>