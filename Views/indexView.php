<?php
    require_once 'Partials/header.php';
?>

<!--Main-->
<main class="border rounded-3">
    <h1 class="d-none">ACCUEIL</h1>
    <article>

        <!--Vidéo-->
        <div class="video-container d-none d-lg-block my-2">
            <!-- Vidéo -->
            <video autoplay="autoplay" loop="autoloop">
                <source src="../assets/vids/production_id_4253721(2160p).mp4" class="video"type="video/mp4">
            </video>  
            <!-- Recherche -->
            <form class="d-none d-lg-flex position-absolute top-50 start-50 translate-middle">
                <input id="searchInput" class="form-control rounded-pill text-center fs-5 bg-beige border-black" type="search" placeholder="Que désirez-vous ?" aria-label="Search">
            </form>
        </div>

        <div id="results" class="d-flex justify-content-center flex-wrap"></div>

        <!--Catégorie-->
        <div class="parallax d-none d-lg-block rounded-2 border border-2 border-black my-2 content-to-hide shadow"></div>

        <div class="d-none d-lg-flex flex-wrap justify-content-around border rounded-5">
            <?php
            $categories = DAO::getCategoriePop();
            foreach ($categories as $categorie) {
                echo '
                <div class="col-4 d-flex justify-content-center">
                    <div class="card shadow m-5 fs-4 rounded-5 col-7 col-md-9 col-xl-7 text-center  bg-beige">
                        <img src="/assets/img/categorie/' . $categorie['image'] . '" class="card-img-top img-fluid rounded-top-5" alt="Image de la carte">
                        <div class="card-body">
                            <a href="/platsCategorie.php?categorie_id=' . $categorie['id'] . '" class="btn card-title fs-5 p-0"><h3 class="m-0">' . $categorie['nom_categorie'] . '</h3></a>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>

        <div class="bg-gris rounded-5 my-5">
        <!--Réservez-->
        <div class="bg d-none d-lg-flex justify-content-start p-4 m-4 text-center beige">
            <div class="col-10 p-5 shadow rounded-pill  bg-fondu border">
                <h3 class="my-3">Découvrez un monde de saveurs exquises qui vous transportera dans un voyage culinaire inoubliable !</h3>
                <p class="my-3">Notre restaurant vous ouvre ses portes pour une expérience gastronomique incomparable.</p>
                <p>Réservez dès maintenant votre table pour une soirée placée sous le signe de la délectation et de la convivialité.</p>
            </div>
        </div>

        <!--Commander-->
        <div class="bg d-none d-lg-flex justify-content-end p-4 m-4 text-center beige">
            <div class="col-8 p-5 shadow rounded-pill bg-fondu border">
                <h3 class="my-3">Optez pour la praticité en commandant nos plats délicieusement préparés à emporter !</h3>
                <p>Laissez-nous vous émerveiller avec notre menu varié, concocté avec des ingrédients frais et de qualité, garantissant une explosion de saveurs à chaque bouchée.</p>
                <p>Réservez votre expérience culinaire dès aujourd'hui et laissez-nous vous offrir un festin mémorable qui ravira tous vos sens !</p>
            </div>
        </div>
        </div>


        <!--Plats-->
        <div class="parallax parallax2 d-none d-lg-block rounded-2 border border-2 border-black my-2"></div>

        <div class="d-flex flex-wrap justify-content-around my-5 border rounded-5">
            <?php
            $plats = DAO::getPlatsPop();
            foreach ($plats as $plat) {
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

    </article>

    <!--Caroussel Bas de Page-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide d-none d-lg-block ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner image-container">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="../assets/img/caroussel/pexels.diva.plavalaguna.6150432.jpg" class="img-fluid d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p class="fs-3 fw-bold opacity-100">"Découvrez une nouvelle façon de régaler vos amis : commandez en ligne les plats les plus délicieux pour une soirée conviviale à la maison."</p>
                </div>
            </div>
            <div class="carousel-item image-container" data-bs-interval="2000">
                <img src="../assets/img/caroussel/pexels-elevate-1267696.jpg" class="img-fluid d-block" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p class="fs-3 fw-bold opacity-100 mb-5 pb-5 beige">"Notre restaurant vous offre une vue magnifique et des plats délicieux. Pour une expérience mémorable, n'oubliez pas de réserver votre table."</p>
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
require_once 'Partials/footer.php';
?>
<script src="assets/JS/recherche.js"></script>