<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Liste des catégories</title>
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Plongez dans un monde de délices au restaurant The District. Chaque plat raconte une histoire de goût inoubliable. - The District Catégorie">
    <meta name="Keywords" content="The District, The-District, Restaurant, Gastronomie, Commander, Rapidement, En ligne, Réserver, Catégorie, Burger, Wrap, Pizza, Veggies, Salade, Sandwich, Asian">
    <meta name="Subject" content="Catégorie">
    <meta name="Author" content="Erwan.T">
    <meta name="Publisher" content="Flmbfle">
    <meta name="Geography" content="80000, Amiens, France">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/style.css">
  </head>
  <body class="d-flex h-100 bg-dark">
    <div class="container py-2 bg-dark rounded-4">
      <?php include 'assets/php/header.php'; ?>
      <!--Main-->
      <main class="bg-beige rounded-4 mt-2 p-2">
        <div class="d-none d-lg-block parallax"><h1 class="d-none">Catégorie</h1></div>
        <div class="row mx-0">
          <div id="carouselExample" class="carousel slide rounded-4 mt-2">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div id="categories-1" class="d-flex flex-wrap justify-content-around"></div>
              </div>
              <div class="carousel-item">
                <div id="categories-2" class="d-flex flex-wrap justify-content-around"></div>
              </div>
            </div>
            
            <div class="d-flex justify-content-around my-3">
              <button class="btn fleche bg-mauve rounded-4" type="button" data-slide="prev" data-bs-target="#carouselExample" data-bs-slide="prev">
                <img class="img-fluid" src="assets/img/the_district_brand/fleche-gauche.png" alt="Précedent">
                <span class="visually-hidden">Précedent</span>
              </button>
              <button class="btn fleche bg-mauve rounded-4" type="button" data-slide="next" data-bs-target="#carouselExample" data-bs-slide="next">
                <img class="img-fluid" aria-hidden="true" src="assets/img/the_district_brand/fleche-droite.png" alt="Suivant">
                <span class="visually-hidden">Suivant</span>
              </button>
            </div>
          </div>
        </div>

      </main>
      <?php include 'assets/php/footer.php'; ?>   
      
    </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
      </script> 
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
      </script> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
      </script>
      <script src="/assets/JS/theDisrtict.js">
      </script>
  </body>
</html>
