<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/header.php';
?>
<main class="rounded-3 my-3 col-12">
    <div class="parallax parallax2 d-none d-lg-block my-3"></div>
    <div class="d-flex flex-wrap justify-content-around my-2 bg-beige rounded-3">
        <!--Plats-->
        <?php
        $plats = DAO::getPlats();
        foreach ($plats as $plat) {
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
</main>
<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/footer.php';
?>