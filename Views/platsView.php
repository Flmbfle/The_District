<?php
require_once 'Partials/header.php';
    echo 
    '
    <main class="rounded-3 my-3 col-12 border">
        <div class="parallax parallax2 d-none d-lg-block my-3"></div>
            <div class="d-flex flex-wrap justify-content-around my-2 rounded-3">
    ';

            //Plats
            $plats = DAO::getPlats();
            foreach ($plats as $plat) 
            {
            echo
            '
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
                </div>
                ';
            }
    echo
    '
        </div>
    </main>
    ';

require_once 'Partials/footer.php';
