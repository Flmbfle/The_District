<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/header.php';
?>
<div class="d-none d-lg-block parallax rounded-3 my-3">
  <h1 class="d-none">Catégorie</h1>
</div>
  <div id="carouselExample" class="carousel slide rounded-5 my-3 p-0">
    <div class="carousel-inner bg-beige rounded-3">
      <div class="carousel-item active">
        <div class="row justify-content-around">
          <?php
          foreach ($categorieAct as $categorie) {
            echo
            '
            <div class="col-4 d-none d-lg-block content content-to-hide text-center">
              <div class="card bg-beige shadow border-mauve m-4 fs-4 rounded-5">
                <img src="/assets/img/categorie/' . $categorie['image'] . '" class="card-img-top img-fluid rounded-top-5" alt="Image de la carte">
                <div class="card-body">
                  <h5 class="card-title mauve">' . $categorie['nom_categorie'] . '</h5>
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
            <div class="col-4 d-none d-lg-block content content-to-hide text-center">
              <div class="card bg-beige shadow border-mauve m-4 fs-4 rounded-5">
                <img src="/assets/img/categorie/' . $categorie['image'] . '" class="card-img-top img-fluid rounded-top-5" alt="Image de la carte">
                <div class="card-body">
                  <h5 class="card-title mauve">' . $categorie['nom_categorie'] . '</h5>
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
    <button class="btn fleche bg-mauve rounded-4 shadow" type="button" data-bs-slide="prev" data-bs-target="#carouselExample" data-bs-slide="prev">
      <img class="img-fluid" src="../assets/img/the_district_brand/fleche-gauche.png" alt="Précedent">
      <span class="visually-hidden">Précedent</span>
    </button>
    <button class="btn fleche bg-mauve rounded-4" type="button" data-bs-slide="next" data-bs-target="#carouselExample" data-bs-slide="next">
      <img class="img-fluid" aria-hidden="true" src="../assets/img/the_district_brand/fleche-droite.png" alt="Suivant">
      <span class="visually-hidden">Suivant</span>
    </button>
  </div>
<?php
require_once '/home/flambi/Bureau/The_District/Views/Partials/footer.php';
?>