<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5TSQ4RDF');</script>
  <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="The District, The-District, Restaurant, Gastronomie, Commander, Rapidement, En ligne, Réserver, Catégorie, Burger, Wrap, Pizza, Veggies, Salade, Sandwich, Asian">
    <meta name="Subject" content="Catégorie">
    <meta name="Author" content="Erwan.T">
    <meta name="Publisher" content="Flmbfle">
    <meta name="Geography" content="80000, Amiens, France">
    
    <title>The District Commande</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/style.css">
  </head>
  <body class="d-flex h-100 bg-dark">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TSQ4RDF"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="container py-2 bg-dark rounded-4">
      <?php include 'assets/php/header.php'; ?>

      <main class="bg-beige rounded-3">
        <div>
          <div></div><!--Plats commandé-->
          <div class="px-5 py-2 shadow mt-2 rounded-3">
            <form action="" class="row d-flex justify-content-around">
              <!-- NOM PRENOM-->
              <div class="my-2">
                <label for="exampleInputNom" class="form-label">Nom et Prénom<b>*</b></label>
                <input type="text" class="form-control" id="exampleInputNom" placeholder="Veuillez saisir votre nom" required>
                <div class="text-danger alert alert-danger d-none" role="alert" id="NomPrenomError"></div>
              </div>

              <!-- EMAIL -->
              <div class="col-md-6 my-2">
                <label for="exampleInputEmail" class="form-label">Email<b>*</b></label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="dave.loper@afpa.fr" required>
                <div class="text-danger alert alert-danger d-none" role="alert" id="EmailError"></div>
                <div id="emailHelp" class="form-text text-black-50">
                  Nous ne partagerons jamais votre email.
                </div>
              </div>

              <!--TELEPHONE-->
              <div class="col-md-6 my-2">
                <label for="exampleInputTel" class="form-label">Téléphone<b>*</b></label>
                <input type="tel" class="form-control" id="exampleInputTel" placeholder="xx.xx.xx.xx.xx" required>
                <div class="text-danger alert alert-danger d-none" role="alert" id="TelError"></div>
              </div>
              <!--ADRESSE-->
              <div class="my-2">
                <label for="exampleInputAdresse" class="form-label">Adresse<b>*</b></label>
                <input type="text" class="form-control" id="exampleInputAdresse" required>
                <div class="text-danger alert alert-danger d-none" role="alert" id="AdresseError"></div>
              </div>

              <!--CONDITIONS-->
              <div class="row">
                <div class="my-2">
                  <input type="checkbox" name="conditions" value="j'accepte le traitement informatique de ce formulaire"  id="conditions" required>
                  <span class="fs-6"><b>*</b>J'accepte le traitement informatique de ce formulaire.</span><br>
                  <div class="text-danger alert alert-danger d-none" role="alert" id="ConditionError"></div>
                </div>

                <div class="d-flex justify-content-end">
                  <input type="reset" value="Annuler" id="btn_annuler" class="btn text-bg-light btn-outline-dark">
                  <input type="submit" id="btn_envoyer" class="btn text-bg-light btn-outline-dark mx-2">
                </div>
              </div>
            </form>
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
      <script src="assets/JS/commande.js">
      </script>
      <!-- <script src="assets/js/contact.js"></script> -->
  </body>
</html>
