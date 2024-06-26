<!-- contact.php -->
<?php
$title = "Contacter Avian";
include('header.php'); ?>

<main>
    <h2 class="Hfamily">Influez l'avenir de l'histoire d'Avian</h2>
    <p class="fontext">Par le biais de ce formulaire vous pouvez orienter, en soumettant vos avis et idées, l'avenir d'Avian dans son aventure. </p>
    <form class="contact-form" action="traitement_formulaire.php" method="post">
        <label class="form-label" for="civility">Civilité :</label>
        <select class="form-select" id="civility" name="civility">
            <option value="">Sélectionnez votre civilité</option>
            <option value="Mr">Monsieur</option>
            <option value="Mrs">Madame</option>
            <option value="Miss">Mademoiselle</option>
        </select>
        <label class="form-label" for="name">Nom :</label>
        <input class="form-input" type="text" id="name" name="name" required pattern="^[A-Za-z '-]+$" maxlength="20">

        <label class="form-label" for="email">Email :</label>
        <input class="form-input" type="email" id="email" name="email" 
        required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}$">
        <fieldset class="form-radio">
            <legend>Quel est le but de ton message ?</legend>
            <div>
                <input type="radio" id="Raison" name="Raison" value="nouvel heros" checked />
                <label class="form-radio" for="Raison">Je veux changer de Heros</label>
            </div>

            <div>
                <input type="radio" id="Raison" name="Raison" value="nouvelle histoire" />
                <label class="form-radio" for="Raison">Je veux changer le cours de l'histoire</label>
            </div>

            <div>
                <input type="radio" id="Raison" name="Raison" value="nouvelle idée" />
                <label class="form-radio" for="Raison">J'ai une super bonne idée</label>
            </div>
        </fieldset>

        <label class="form-label" for="message">Message :</label>
        <textarea class="form-textarea" id="message" name="message" rows="6" minlength="5"></textarea>

        <input class="form-submit" type="submit" value="Envoyer">
    </form>
</main>

<?php include('footer.php'); ?>