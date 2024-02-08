<?php
    require_once '/home/flambi/Bureau/The_District/Views/Partials/header.php';
?>
<!--Main-->
<h1 class="d-none">ACCUEIL</h1>
<main class="bg-mauve rounded-3 p-2 mt-2">
    <article>
        <div class="video-container d-none d-lg-flex">
            <div class="video-content">
                <!-- Vidéo -->
                <video autoplay="autoplay" loop="autoloop">
                    <source src="../assets/vids/production_id_4253721(2160p).mp4" type="video/mp4">
                </video>
            </div>
            <!-- Recherche -->
            <form class="d-none d-lg-flex position-absolute top-50 start-50 translate-middle">
                <input id="searchInput" class="form-control me-2 rounded-pill fs-4 text-center" type="search" placeholder="Que désirez-vous ?" aria-label="Search">
            </form>
        </div>
        <div id="results" class="mt-2 d-flex justify-content-center flex-wrap"></div>
        <div class="content-to-hide shadow">

            <!--Parallax Catégorie-->
            <div class="parallax d-none d-lg-block rounded-2 border border-2 border-black my-2 content-to-hide shadow"></div>

            <div class="d-flex flex-wrap justify-content-around my-2 bg-beige rounded-3">

                <?php
                $categories = DAO::getCategoriePop();
                foreach ($categories as $categorie) {
                    echo '
                    <div class="col-3 m-1 d-none d-lg-block content content-to-hide text-center">
                        <div class="card bg-beige shadow border-mauve m-4 fs-4 rounded-5">
                            <img src="/assets/img/categorie/' . $categorie['image'] . '" class="card-img-top img-fluid rounded-top-5" alt="Image de la carte">
                            <div class="card-body">
                            <a href="/platsCategorie.php?categorie_id=' . $categorie['id'] . '" class="btn card-title mauve fs-5 p-0"><h5 class="m-0">' . $categorie['nom_categorie'] . '</h5></a>
                            </div>
                        </div>
                    </div>';
                }
                ?>

            </div>


            <!--Parallax Plats-->
            <div class="parallax parallax2 d-none d-lg-block rounded-2 border border-2 border-black my-2 content-to-hide"></div>

            <div class="d-flex flex-wrap justify-content-around my-2 bg-beige rounded-3">
                <!--Plats-->
                <?php
                $plats = DAO::getPlatsPop();
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
        </div>
    </article>
    <!--Caroussel Bas de Page-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide d-none d-lg-block">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner max-car">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="../assets/img/caroussel/pexels.diva.plavalaguna.6150432.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-beige opacity-50">
                    <p class="fs-3 fw-bold opacity-100">"Découvrez une nouvelle façon de régaler vos amis : commandez en ligne les plats les plus délicieux pour une soirée conviviale à la maison."</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../assets/img/caroussel/A.cinematic.view.of.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-black opacity-75">
                    <p class="fs-3 fw-bold opacity-100 beige">"Notre restaurant vous offre une vue magnifique et des plats délicieux. Pour une expérience mémorable, n'oubliez pas de réserver votre table."</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</main>
<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/footer.php';
?>
<script src="assets/JS/recherche.js"></script>