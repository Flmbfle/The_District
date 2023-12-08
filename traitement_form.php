<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["InputNom"];
    $prenom = $_POST["InputPrenom"];
    $email = $_POST["InputEmail"];
    $telephone = $_POST["InputTel"];
    $demande = $_POST["InputDemande"];

    $informations = "Nom: $nom\nPrenom: $prenom\nEmail: $email\nTelephone: $telephone\nDemande: $demande\n\n";

    $nomFichier = date("Y-m-d-H-i-s") . ".txt";
    $repertoire = "contact/";

    if (!file_exists($repertoire)) {
        mkdir($repertoire, 0777, true);
    }

    $cheminFichier = $repertoire . $nomFichier;

    file_put_contents($cheminFichier, $informations, FILE_APPEND);
}
?>
