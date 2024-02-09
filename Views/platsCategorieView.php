<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/header.php';

// Récupérer l'identifiant de la catégorie depuis l'URL
$categorieId = $_GET['categorie_id']; // Assurez-vous que le nom de l'identifiant correspond à celui dans l'URL

// Utiliser la fonction pour récupérer les plats de la catégorie spécifiée
$platsByCategorie = DAO::getPlatsByCategorie($categorieId);
?>
<main class="border rounded-3">
<div class="d-flex flex-wrap justify-content-around mt-2 rounded-top-3">
<!--Plats-->
<?php
$plats = DAO::getPlatsPop();
foreach ($platsByCategorie as $plat) {
    echo '
    <div class="card my-3 col-lg-5 col-md-8 rounded-4 shadow row bg-beige border border-black border-2">
        <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
            <div class="col-5 col-lg-5 ">
                <img src="/assets/img/plats/' . $plat['image'] . '" class="card-img img-fluid" alt="Image de la carte">
            </div>
            <div class="col-7 col-lg-7 h-100 text-center px-3 ">
                <h3 class="card-title mb-3">' . $plat['libelle'] . '</h3>
                <p class="card-text fs-5">' . $plat['description'] . '</p>
            </div>
        </div>
        <div class="card-footer">
            <p class="card-text mb-0 text-black fs-5">Prix : ' . $plat['prix'] . ' €</p>
            <a href="/commande.php?id=' . $plat['id'] . '" class="btn btn-outline-dark gris fs-5">Commander</a>
        </div>
    </div>';
}
?>
</div>
<div class="d-flex justify-content-end rounded-bottom-3">
    <a href="javascript:history.back()" class="btn btn-outline-dark m-2 me-5 bg-beige">Retour</a>
</div>
</main>
<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/footer.php'
?>  