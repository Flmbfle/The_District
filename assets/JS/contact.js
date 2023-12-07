$(document).ready(function() {
    //TEST COULEUR QUAND ON FOCUS QUELQUE CHOSE
    
    function effacerErreurs() {
        // Réinitialisez les messages d'erreur et masquez-les
        $(".text-danger").text("").addClass("d-none");
    }

    function verif() {
        var envoi = true;

        var nom = $("#InputNom").val();
        var prenom = $("#InputPrenom").val();
        var adresse = $("#InputAdresse").val();
        var email = $("#InputEmail").val();
        var telephone = $("#InputTel").val();
        var demande = $("#InputDemande").val();
        var conditionsAcceptees = $("#conditions").is(":checked");
        

        if (nom.length < 1) {
            envoi = false;
            $("#NomError").text("Votre Nom doit comporter au moins 1 caractère.").removeClass("d-none");
        }
        if (prenom.length < 1) {
            envoi = false;
            $("#PrenomError").text("Votre Prénom doit comporter au moins 1 caractère.").removeClass("d-none");
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
        if (demande.length < 20) {
            envoi = false;
            $("#DemandeError").text("Votre demande doit contenir au moins 20 caractères.").removeClass("d-none");
        } else {
            $("#DemandeError").addClass("d-none");
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
