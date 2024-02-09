<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Incluez le fichier autoload.php de PHPMailer
require_once 'vendor/autoload.php';
require_once 'Model/Managers/DAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $nomPrenom = $_POST["exampleInputNom"];
    $email = $_POST["exampleInputEmail"];
    $telephone = $_POST["exampleInputTel"];
    $adresse = $_POST["exampleInputAdresse"];
    
    // Récupérez également l'ID du plat depuis la requête GET si nécessaire
    $platId = isset($_GET['id']) ? $_GET['id'] : '';
    $platDetails = DAO::getPlatById($platId);

    // Extraire les détails du plat
    $platLibelle = $platDetails['libelle'];
    $platPrix = $platDetails['prix'];
    $platDescription = $platDetails['description'];
    $platImage = $platDetails['image'];

    // Chemin absolu vers l'image du plat sur votre serveur localhost
    $cheminImage = "http://localhost/The_District/assets/img/plats/$platImage";

    // Créez une nouvelle instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'localhost'; // Adresse du serveur SMTP
        $mail->SMTPAuth = false;   // Authentification SMTP
        $mail->Port = 1025;        // Port SMTP

        // Destinataire
        $to = 'dave.loper@afpa.com'; // Adresse e-mail du destinataire

        // Sujet
        $subject = 'Confirmation de commande';

        // Contenu du message
        $message = "
        <!DOCTYPE html>
        <html lang='fr'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
            <title>TheDistrict</title>
            
        </head>
        <body style='padding: 1px; font-style: 1rem;' class='d-flex justify-content-center shadow'>
        <div class='container shadow rounded-3'>
            <header class='text-center'>
                <p class='m-4'>Votre ticket de caisse</p>
                <img class='col-1' src='http://localhost/The_District/assets/img/the_district_brand/logo.png'>
                <h4 class='m-4'>Merci pour votre commande !</h4>
            </header>
            <main>
                <p class='fs-5 m-4'>
                    Bonjour
                    <br>
                    <br>
                    Nous vous remercions pour votre visite.
                    <br>
                    <br>
                    Voici le récapitulatif de votre commande :
                </p>
                <div class='card m-5 col-8 border border-black bg-beige card-custom rounded-4 shadow mx-auto bg-light'>
                <div class='row g-0 bg-beige'>
                    <div class='col-md-4 col-lg-5 d-flex align-items-center justify-content-center'>
                        <img src='$cheminImage' class='card-img img-fluid' alt='Image de la carte'>
                    </div>
                    <div class='col-md-8 col-lg-7 h-100 text-center px-3'>
                        <p class='card-title fs-3'>$platLibelle</p>
                        <p class='card-text scrollable-text h-100'>$platDescription</p>
                    </div>
                </div>
                <div class='card-footer'>
                    <p class='card-text mb-0'><small class='text-black fs-6'>Prix : $platPrix €</small></p>                    
                </div>
            </div>
    
                <div id='infoClient' class='p-5 d-flex justify-content-around flex-wrap text-center'>
                    <p class='my-3 col-6'><b>Nom Prénom :</b> $nomPrenom</p>
                    <p class='my-3 col-6'><b>Email :</b> $email</p>
                    <p class='my-3 col-6'><b>Téléphone :</b> $telephone</p>
                    <p class='my-3 col-6'><b>Adresse :</b> $adresse</p>
                </div>
                
            </main>
            <footer class='col-10 text-center mx-auto' style='margin-top: 20%'>
                <p>
                    Conformément au règlement sur la protection des données n°2016/679 et à la loi informatique et libertés n°78-17 du 6 janvier 1978 modifiée, les informations recueillies font l’objet d’un traitement informatique et sont enregistrées dans un fichier informatisé par TheDistrict France Services, responsable de traitement, dans le cadre de son activité de restauration et de gestion de la base de ses clients et prospects. Nous collectons ainsi des données vous concernant lorsque vous fréquentez nos restaurants, utilisez nos sites Internet ou nos applications mobiles (les « services en ligne ») ou interagissez de toute autre manière avec nous.
                </p>
            </footer>
        </div>
        
    
    
    
    
    
    
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js'>
        </script>
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js'>
        </script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'>
        </script>
    </body>
        </html>";

        // Configuration de l'e-mail
        $mail->setFrom('erwabtot@gmail.com', 'TheDistrict');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Envoi de l'e-mail
        $mail->send();

        // Redirigez l'utilisateur après l'envoi de l'e-mail
        header("Location: /index.php");
        exit();
    } catch (Exception $e) {
        echo 'Erreur lors de l\'envoi de l\'e-mail : ', $mail->ErrorInfo;
    }
} else {
    // Gérez le cas où le formulaire n'est pas soumis avec la méthode POST
    echo "Erreur : Le formulaire doit être soumis avec la méthode POST.";
}
?>

