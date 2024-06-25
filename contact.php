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
        <input class="form-input" type="text" id="name" name="name">

        <label class="form-label" for="email">Email :</label>
        <input class="form-input" type="email" id="email" name="email">

        <label class="form-label" for="Raison">Dans quel but :</label>
        <select class="form-select" id="Raison" name="Raison">
            <option value="">Quel est le but de ton message</option>
            <option value="nouvel heros">Je veux changer de Heros</option>
            <option value="nouvelle histoire">Je veux changer le cours de l'histoire</option>
            <option value="nouvelle idée">J'ai une super bonne idée</option>
        </select>

        <label class="form-label" for="message">Message :</label>
        <textarea class="form-textarea" id="message" name="message" rows="6" minlength="5"></textarea>

        <input class="form-submit" type="submit" value="Envoyer">
    </form>

    <div class="pictpos">
        <img class="picstyle" href="" src="/IMG/pictform.png" alt="image">
    </div>
</main>

<?php include('footer.php'); ?>