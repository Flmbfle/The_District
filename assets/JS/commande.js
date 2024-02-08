
    //TEST COULEUR QUAND ON FOCUS QUELQUE CHOSE
    $('input').focus(function(){
        $(this).css('background-color' , '#970747');
    });
    $('input').blur(function(){
        $(this).css('background-color' , '#FEF4E8')
    })
    
    $(document).ready(function() {

        function validateName() {
            var exampleInputNom = $('#exampleInputNom').val();
            if (/^[a-zA-ZÀ-ÿ\s']+$/u.test(exampleInputNom)) {
                $('#NomError').addClass('d-none');
                return true;
            } else {
                $('#NomError').removeClass('d-none');
                return false;
            }
        }
    
    
        function validateEmail() {
            var exampleInputEmail = $('#exampleInputEmail').val();
            if (/^\S+@\S+\.\S+$/.test(exampleInputEmail)) {
                $('#EmailError').addClass('d-none');
                return true;
            } else {
                $('#EmailError').removeClass('d-none');
                return false;
            }
        }
    
    
        function validateTelephone() {
            var exampleInputTel = $('#exampleInputTel').val();
            if (/^0[1-9]([-. ]?[0-9]{2}){4}$/.test(exampleInputTel)) {
                $('#TelError').addClass('d-none');
                return true;
            } else {
                $('#TelError').removeClass('d-none');
                return false;
            }
        }
    
    
        function validateAdresse() {
            var adresse = $('#exampleInputAdresse').val();
            if (adresse.length > 0) {
                $('#AdresseError').addClass('d-none');
                return true;
            } else {
                $('#AdresseError').removeClass('d-none');
                return false;
            }
        }
        

        
    
        $('#btn_envoyer').click(function(event) {
            event.preventDefault(); // Empêche l'envoi du formulaire par défaut
        
            // Valide les champs
            var nomValide = validateName();
            var emailValide = validateEmail();
            var telephoneValide = validateTelephone();
            var adresseValide = validateAdresse();
        
            // Vérifie si toutes les validations sont réussies
            if (nomValide && emailValide && telephoneValide && adresseValide) {
                // Toutes les données sont valides, vous pouvez envoyer le formulaire
                $('#commandeForm').submit(); // Envoie le formulaire
                alert("Un mail de confirmation vous à été envoyé")
            }
            // Sinon, ne fait rien et laisse les messages d'erreur s'afficher
        });
    });