<?php

$pdo = new PDO('mysql:host=localhost;dbname=theDistrict', 'admin', 'Afpa1234');

$query = $_POST['query'];


$stmt = $pdo->prepare("SELECT * FROM plat WHERE libelle LIKE :query");
$stmt->execute(['query' => "%$query%"]);
$plat = $stmt->fetchAll();

foreach ($plat as $plat) {
    echo 
    '
    <div class="card m-1 p-1 col-10 border border-black bg-beige mauve shadow">
        <div class="row g-0 bg-beige rounded-3">
            <div class="col-2 d-flex align-items-center justify-content-center">
                <img src="/assets/img/plats/' . $plat['image'] . '" class="card-img img-fluid" alt="Image de la carte">
            </div>
            <div class="col-10 h-100 text-center px-3">
            <p class="card-text">
                <h6 class="card-title fs-3">' . $plat['libelle'] . '</h6>' . $plat['description'] . '
            </p>
                <div class="d-flex justify-content-end align-items-center">
                    <p class="card-text mb-0 mx-3"><small class="text-black fs-6">Prix : ' . $plat['prix'] . ' €</small></p>
                    <a href="/commande.php?id=' . $plat['id'] . '" class="btn btn-outline-dark text-bg-mauve beige">Commander</a>
                </div>
            </div>
            

        </div>
    </div>
    ';
    }