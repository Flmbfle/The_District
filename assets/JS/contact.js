$(document).ready(function() {

    function validateName() {
        var InputNom = $('#InputNom').val();
        if (/^[a-zA-Z\s]$/.test(InputNom)) {
            $('#NomError').addClass('d-none');
            return true;
        } else {
            $('#NomError').removeClass('d-none');
            return false;
        }
    }

    function validatePrenom() {
        var InputPrenom = $('#InputPrenom').val();
        if (/^[a-zA-Z\s]$/.test(InputPrenom)) {
            $('#PrenomError').addClass('d-none');
            return true;
        } else {
            $('#PrenomError').removeClass('d-none');
            return false;
        }
    }

    function validateEmail() {
        var InputEmail = $('#InputEmail').val();
        if (/^\S+@\S+.\S+$/.test(InputEmail)) {
            $('#EmailError').addClass('d-none');
            return true;
        } else {
            $('#EmailError').removeClass('d-none');
            return false;
        }
    }

    function validateTelephone() {
        var InputTel = $('#InputTel').val();
        if (/^(\d{2}\s?){4}\d{2}$/.test(InputTel)) {
            $('#TelError').addClass('d-none');
            return true;
        } else {
            $('#TelError').removeClass('d-none');
            return false;
        }
    }

    function validateDemande() {
        var InputDemande = $('#InputDemande').val();
        if (InputDemande.length > 0) {
            $('#DemandeError').addClass('d-none');
            return true;
        } else {
            $('#DemandeError').removeClass('d-none');
            return false;
        }
    }

    $('#verifierBouton').click(function() {
        var nomValide = validateName();
        var prenomValide = validatePrenom();
        var emailValide = validateEmail();
        var telephoneValide = validateTelephone();
        var demandeValide = validateDemande();

        if (nomValide && prenomValide && emailValide && telephoneValide && demandeValide) {
            $.ajax({
                type: 'POST',
                url: 'traitement_form.php',
                data: {
                    InputNom: $('#Nom').val(),
                    InputPrenom: $('#Prenom').val(),
                    InputEmail: $('#email').val(),
                    InputTelephone: $('#Telephone').val(),
                    InputDemande: $('#Demande').val()
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }
    });
})