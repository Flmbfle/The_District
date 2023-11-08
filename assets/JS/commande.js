$(document).ready(function() {
    function verif() {
        var envoi = true;

        // Réinitialisez les messages d'erreur et masquez-les au début de la validation
        $(".text-danger").text("").addClass("d-none");

        var nom = $("#exampleInputNom").val();
        var adresse = $("#exampleInputAdresse").val();
        var email = $("#exampleInputEmail").val();
        var conditionsAcceptees = $("#conditions").is(":checked");
        var telephone = $("#exampleInputTel").val();

        if (nom.length < 1) {
            envoi = false;
            $("#NomPrenomError").text("Votre nom doit comporter au moins 1 caractère.").removeClass("d-none");
        }
        if (adresse.length < 1) {
            envoi = false;
            $("#AdresseError").text("Veuillez entrer votre adresse.").removeClass("d-none");
        }
        if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
            envoi = false;
            $("#EmailError").text("L'adresse email n'est pas valide.").removeClass("d-none");
        }
        if (!/^(\+33|0)[1-9]( \d\d|\.(\d\d))*$/.test(telephone)) {
            envoi = false;
            $("#TelError").text("Le numéro fourni est incorrect").removeClass("d-none");
        }
        if (!conditionsAcceptees) {
            envoi = false;
            $("#ConditionError").text("Merci de bien vouloir accepter les conditions !").removeClass("d-none");
        }
        if (envoi) {
            alert("Formulaire soumis avec succès!");
            // Vous pouvez soumettre le formulaire ici ou effectuer d'autres actions.
        }
    }

    // Ajoutez un gestionnaire d'événements pour le bouton "Envoyer"
    $("#btn_envoyer").click(function(e) {
        e.preventDefault(); // Empêche le formulaire de se soumettre par défaut
        verif(); // Appelle la fonction de validation
    });

    // Ajoutez un gestionnaire d'événements pour le bouton "Annuler"
    $("#btn_annuler").click(function() {
        effacerErreurs();
    });
});
