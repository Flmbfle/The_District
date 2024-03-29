<?php require_once 'Partials/header.php';?>

<main class="border rounded-3">
  <div class="d-none d-lg-block parallax rounded-3 my-3">
    <h1 class="d-none">Catégorie</h1>
  </div>
    <div id="carouselExample" class="carousel slide rounded-5 my-3 p-0">
      <div class="carousel-inner rounded-3">
        <div class="carousel-item active">
          <div class="row justify-content-around">
            <?php
            foreach ($categorieAct as $categorie) {
              echo
              '
              <div class="col-4 col-md-5 col-lg-3 m-1 content content-to-hide text-center">
                <div class="card bg-beige shadow m-4 fs-4 rounded-5">
                  <img src="/assets/img/categorie/' . $categorie['image'] . '" class="card-img-top img-fluid rounded-top-5" alt="Image de la carte">
                  <div class="card-body">
                  <a href="/platsCategorie.php?categorie_id=' . $categorie['id'] . '" class="btn card-title fs-5 p-0"><h5 class="m-0">' . $categorie['nom_categorie'] . '</h5></a>
                  </div>
                </div>
              </div>
            ';
            }
            ?>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row justify-content-around">
            <?php
            foreach ($autresCategories as $categorie) {
              echo
              '
              <div class="col-4 col-md-5 col-lg-3 m-1 content content-to-hide text-center">
                <div class="card bg-beige shadow m-4 fs-4 rounded-5">
                  <img src="/assets/img/categorie/' . $categorie['image'] . '" class="card-img-top img-fluid rounded-top-5" alt="Image de la carte">
                  <div class="card-body">
                  <a href="/platsCategorie.php?categorie_id=' . $categorie['id'] . '" class="btn card-title fs-5 p-0"><h5 class="m-0">' . $categorie['nom_categorie'] . '</h5></a>
                  </div>
                </div>
              </div>
            ';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-around my-3">
      <button class="btn fleche rounded-4" type="button" data-bs-slide="prev" data-bs-target="#carouselExample" data-bs-slide="prev">
        <img class="img-fluid" src="../assets/img/the_district_brand/fleche_gauche.png" alt="Précedent">
        <span class="visually-hidden">Précedent</span>
      </button>
      <button class="btn fleche rounded-4" type="button" data-bs-slide="next" data-bs-target="#carouselExample" data-bs-slide="next">
        <img class="img-fluid" aria-hidden="true" src="../assets/img/the_district_brand/fleche_droite.png" alt="Suivant">
        <span class="visually-hidden">Suivant</span>
      </button>
    </div>
    </main>
<?php
require_once 'Partials/footer.php';
?>