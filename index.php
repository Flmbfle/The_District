<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>The District</title>
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Découvrez l'authenticité des saveurs au The District, où chaque plat est une expérience culinaire à part entière. - The District Accueil">
    <meta name="Keywords" content="The District, The-District, Restaurant, Gastronomie, Commander, Rapidement, En ligne, Réserver">
    <meta name="Subject" content="Restaurant">
    <meta name="Author" content="Erwan.T">
    <meta name="Publisher" content="Flmbfle">
    <meta name="Robots" content="index">
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
      <h1 class="d-none">ACCUEIL</h1>
      <main class="bg-beige rounded-3 p-2 mt-2">
        <article>
          <div class="video-container d-none d-lg-flex">
            <div class="video-content">
                <!-- Vidéo -->
                <video autoplay="autoplay" loop="loop">
                    <source src="assets/vids/production_id_4253721(2160p).mp4" type="video/mp4">
                </video>
            </div>
            <!-- Recherche -->
            <form class="d-none d-lg-flex position-absolute top-50 start-50 translate-middle">
                <input id="searchInput" class="form-control me-2 rounded-pill fs-4" type="search" placeholder="Que désiriez-vous ?" aria-label="Search">
            </form>
          </div>
          <div id="searchResults" class="mt-2"></div>
          <div class="content-to-hide">
            <!--Parallax Catégorie-->
            <div class="parallax d-none d-lg-block rounded-2 border border-2 border-black my-2 content-to-hide"></div>

            <!--Catégorie-->

            <section class="d-none d-lg-block content bg-beige rounded-5 border-secondary border-4 p-md-4 content-to-hide">
              <!--Première Ligne-->
              <div id="categories-1" class="d-flex flex-wrap justify-content-around"></div>
            </section>
            <!--Parallax Plats-->
            <div class="mt-md-2 parallax parallax2 d-none d-lg-block rounded-2 content-to-hide"></div>
            <!--Plats-->
            <div id="plats" class="d-flex flex-wrap justify-content-around mx-auto"></div>
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
              <img src="assets/img/caroussel/pexels.diva.plavalaguna.6150432.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block bg-beige opacity-50">
                <p class="fs-3 fw-bold opacity-100">"Découvrez une nouvelle façon de régaler vos amis : commandez en ligne les plats les plus délicieux pour une soirée conviviale à la maison."</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="assets/img/caroussel/A.cinematic.view.of.jpg" class="d-block w-100" alt="...">
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
