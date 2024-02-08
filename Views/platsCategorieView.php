<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/header.php';

// Récupérer l'identifiant de la catégorie depuis l'URL
$categorieId = $_GET['categorie_id']; // Assurez-vous que le nom de l'identifiant correspond à celui dans l'URL

// Utiliser la fonction pour récupérer les plats de la catégorie spécifiée
$platsByCategorie = DAO::getPlatsByCategorie($categorieId);
?>
<div class="d-flex flex-wrap justify-content-around mt-2 bg-beige rounded-top-3">
<!--Plats-->
<?php
$plats = DAO::getPlatsPop();
foreach ($platsByCategorie as $plat) {
    echo '
    <div class="card m-3 col-lg-5 border border-black bg-beige mauve card-custom rounded-4 shadow">
        <div class="row g-0 bg-beige">
            <div class="col-md-4 col-lg-5 d-flex align-items-center justify-content-center">
                <img src="/assets/img/plats/' . $plat['image'] . '" class="card-img img-fluid" alt="Image de la carte">
            </div>
            <div class="col-md-8 col-lg-7 h-100 text-center px-3">
                <h5 class="card-title fs-3">' . $plat['libelle'] . '</h5>
                <p class="card-text scrollable-text h-100">' . $plat['description'] . '</p>
            </div>
        </div>
        <div class="card-footer">
            <p class="card-text mb-0"><small class="text-black fs-6">Prix : ' . $plat['prix'] . ' €</small></p>
            <a href="/commande.php?id=' . $plat['id'] . '" class="btn btn-outline-dark text-bg-mauve beige">Commander</a>
        </div>
    </div>';
}
?>
</div>
<div class="d-flex justify-content-end bg-beige rounded-bottom-3">
    <a href="javascript:history.back()" class="btn btn-outline-dark text-bg-mauve m-2 beige">Retour</a>
</div>
<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/footer.php'
?>  