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
    <title>The District Contact</title>
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

      <main class="bg-beige rounded-4 align-items-center">
        <div>
          <div></div><!--Plats commandé-->
          <div class="px-5 py-2 shadow mt-2 rounded-3">
            <form action="/traitement_form.php" class="row d-flex justify-content-around" method="post">
              <!-- NOM-->
              <div class="col-md-6 my-2">
                <label for="InputNom" class="form-label"><h4>Nom<b>*</b></h4></label>
                <input type="text" class="form-control rounded-5 border border-3 border-mauve bg-beige shadow" id="InputNom" name="InputNom" placeholder="Veuillez saisir votre nom" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="NomError"></div>
              </div>

              <!-- PRENOM-->
              <div class="col-md-6 my-2">
                <label for="InputPrenom" class="form-label"><h4>Prénom<b>*</b></h4></label>
                <input type="text" class="form-control rounded-5 border border-3 border-mauve bg-beige shadow" id="InputPrenom" name="InputPrenom" placeholder="Veuillez saisir votre prénom" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="PrenomError"></div>
              </div>

              <!-- EMAIL -->
              <div class="col-md-6 my-2">
                <label for="InputEmail" class="form-label"><h4>Email<b>*</b></h4></label>
                <input type="email" class="form-control rounded-5 border border-3 border-mauve bg-beige shadow" id="InputEmail" name="InputEmail" placeholder="dave.loper@afpa.fr" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="EmailError"></div>
                <div id="emailHelp" class="form-text text-black-50">
                  Nous ne partagerons jamais votre email.
                </div>
              </div>

              <!--TELEPHONE-->
              <div class="col-md-6 my-2">
                <label for="InputTel" class="form-label"><h4>Téléphone<b>*</b></h4></label>
                <input type="tel" class="form-control rounded-5 border border-3 border-mauve bg-beige shadow" id="InputTel" name="InputTel" placeholder="xx.xx.xx.xx.xx" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="TelError"></div>
              </div>
              <!--ADRESSE-->
              <div class="my-2">
                <label for="InputAdresse" class="form-label"><h4>Adresse<b>*</b></h4></label>
                <input type="text" class="form-control rounded-5 border border-3 border-mauve bg-beige shadow" id="InputAdresse" name="InputAdresse" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="AdresseError"></div>
              </div>

              <!--DEMANDE-->
              <div class="my-2">
                <label for="InputDemande" class="form-label"><h4>Votre demande<b>*</b></h4></label>
                <textarea class="form-control rounded-5 border border-3 border-mauve bg-beige shadow" id="InputDemande" name="InputDemande" required></textarea>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="DemandeError"></div>
              </div>


              <!--CONDITIONS-->
              <div class="row">
                <div class="my-2">
                  <input type="checkbox" name="conditions" value="j'accepte le traitement informatique de ce formulaire"  id="conditions" required>
                  <span class="fs-6"><b>*</b>J'accepte le traitement informatique de ce formulaire.</span><br>
                  <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="ConditionError"></div>
                </div>

                <div class="d-flex justify-content-end">
                  <input type="reset" value="Annuler" id="btn_annuler" class="btn shadow btn-form me-2 rounded-5 fs-5">
                  <input type="submit" id="btn_envoyer" class="btn shadow btn-form rounded-5 fs-5">
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
      <script src="assets/JS/contact.js">
      </script>
  </body>
</html>
