<?php require_once 'Partials/header.php';?>

<main class="rounded-3 border beige">
    <div>
      <div class="d-flex justify-content-center">
      <?php
      $platsDAO = new DAO();
      
      if (isset($_GET['id'])) {
          $platId = $_GET['id'];
          $platDetails = $platsDAO->getPlatById($platId);
      
          // Vérifiez si les détails du plat sont récupérés avec succès
          if ($platDetails) {
              echo '
              <div class="card m-3 col-lg-5 border border-black bg-beige card-custom rounded-4 shadow">
                  <div class="row g-0 bg-beige">
                      <div class="col-md-4 col-lg-5 d-flex align-items-center justify-content-center">
                          <img src="/assets/img/plats/' . $platDetails['image'] . '" class="card-img img-fluid" alt="Image de la carte">
                      </div>
                      <div class="col-md-8 col-lg-7 h-100 text-center px-3">
                          <h5 class="card-title fs-3">' . $platDetails['libelle'] . '</h5>
                          <p class="card-text">' . $platDetails['description'] . '</p>
                      </div>
                  </div>
                  <div class="card-footer">
                      <p class="card-text mb-0"><small class="text-black fs-6">Prix : ' . $platDetails['prix'] . ' €</small></p>
                  </div>
              </div>';
          } else {
              echo "Aucun plat trouvé.";
          }
      } else {
      echo "Identifiant du plat non spécifié.";
      }
      ?>
      </div><!--Plats commandé-->
      <div class="px-5 py-2 shadow mt-2 rounded-3">
        <form action="../traitement_commande.php?id=<?php echo $platId; ?>" method="POST" id="commandeForm" class="row d-flex justify-content-around">
          <!-- NOM PRENOM-->
          <div class="my-2">
            <label for="exampleInputNom" class="form-label">Nom et Prénom<b>*</b></label>
            <input type="text" name="exampleInputNom" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="exampleInputNom" placeholder="Veuillez saisir votre nom et votre prénom" required>
            <div class="text-danger alert alert-danger d-none rounded-pill mt-1" role="alert" id="NomError">Veuillez saisir un Nom valide</div>
          </div>
          <!-- EMAIL -->
          <div class="col-md-6 my-2">
            <label for="exampleInputEmail" class="form-label">Email<b>*</b></label>
            <input type="email" name="exampleInputEmail" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="exampleInputEmail" placeholder="dave.loper@afpa.fr" required>
            <div class="text-danger alert alert-danger d-none rounded-pill mt-1" role="alert" id="EmailError">Veuillez saisir une email valide</div>
            <div id="emailHelp" class="form-text">
              <span class="beige">Nous ne partagerons jamais votre email.</span>
              </div>
            </div>
            <!--TELEPHONE-->
            <div class="col-md-6 my-2">
              <label for="exampleInputTel" class="form-label">Téléphone<b>*</b></label>
              <input type="tel" name="exampleInputTel" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="exampleInputTel" placeholder="xx.xx.xx.xx.xx" required>
              <div class="text-danger alert alert-danger d-none rounded-pill mt-1" role="alert" id="TelError">Veuillez saisir un numéro de téléphone Français</div>
            </div>
            <!--ADRESSE-->
            <div class="my-2">
              <label for="exampleInputAdresse" class="form-label">Adresse<b>*</b></label>
              <input type="text" name="exampleInputAdresse" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="exampleInputAdresse" required>
              <div class="text-danger alert alert-danger d-none rounded-pill mt-1" role="alert" id="AdresseError">Veuillez saisir une adresse valide</div>
            </div>
            <!--CONDITIONS-->
            <div class="row">
              <!-- <div class="my-2">
                <input type="checkbox" name="conditions" value="j'accepte le traitement informatique de ce formulaire"  id="conditions" required>
                <span class="fs-6"><b>*</b>J'accepte le traitement informatique de ce formulaire.</span><br>
                <div class="text-danger alert alert-danger d-none" role="alert" id="ConditionError">Merci de bien vouloir accpeté les conditions</div>
              </div> -->
              <div class="d-flex justify-content-end">
                <input type="reset" value="Annuler" id="btn_annuler" class="btn shadow btn-form me-2 rounded-5 fs-5">
                <button type="submit" id="btn_envoyer" class="btn shadow btn-form rounded-5 fs-5">Valider</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="assets/JS/commande.js"></script>
<?php
require_once 'Partials/footer.php';
?>