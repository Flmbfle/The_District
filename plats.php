<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Liste des plats</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Un voyage culinaire vous attend chez The District : des plats exquis du globe, de l'Asie à l'Italie, pour satisfaire toutes les papilles. - The District Plats">
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
      
      <main class="bg-beige rounded-3 mt-2 col-12">
        <div class="parallax parallax2 d-none d-lg-block"></div>
        <div id="plats" class="d-flex flex-wrap justify-content-around mx-auto"></div>
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
      <script src="/assets/JS/plats.js">
      </script>
  </body>
</html>
