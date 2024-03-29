<?php require_once 'Partials/header.php';?>

<main class="rounded-4 align-items-center beige border">
        <div>
          <div></div><!--Plats commandé-->
          <div class="px-5 py-2 shadow mt-2 rounded-3">
            <form action="traitement_form.php" class="row d-flex justify-content-around" method="post">
              <!-- NOM-->
              <div class="col-md-6 my-2">
                <label for="InputNom" class="form-label"><h4>Nom<b>*</b></h4></label>
                <input type="text" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="InputNom" name="InputNom" placeholder="Veuillez saisir votre nom" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="NomError"></div>
              </div>

              <!-- PRENOM-->
              <div class="col-md-6 my-2">
                <label for="InputPrenom" class="form-label"><h4>Prénom<b>*</b></h4></label>
                <input type="text" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="InputPrenom" name="InputPrenom" placeholder="Veuillez saisir votre prénom" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="PrenomError"></div>
              </div>

              <!-- EMAIL -->
              <div class="col-md-6 my-2">
                <label for="InputEmail" class="form-label"><h4>Email<b>*</b></h4></label>
                <input type="email" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="InputEmail" name="InputEmail" placeholder="dave.loper@afpa.fr" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="EmailError"></div>
                <div id="emailHelp" class="form-text">
                  <span class="beige">Nous ne partagerons jamais votre email.</span>
                </div>
              </div>

              <!--TELEPHONE-->
              <div class="col-md-6 my-2">
                <label for="InputTel" class="form-label"><h4>Téléphone<b>*</b></h4></label>
                <input type="tel" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="InputTel" name="InputTel" placeholder="xx.xx.xx.xx.xx" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="TelError"></div>
              </div>
              <!--ADRESSE-->
              <div class="my-2">
                <label for="InputAdresse" class="form-label"><h4>Adresse<b>*</b></h4></label>
                <input type="text" class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="InputAdresse" name="InputAdresse" required>
                <div class="text-danger alert alert-danger d-none rounded-5" role="alert" id="AdresseError"></div>
              </div>

              <!--DEMANDE-->
              <div class="my-2">
                <label for="InputDemande" class="form-label"><h4>Votre demande<b>*</b></h4></label>
                <textarea class="form-control rounded-5 btn-outline-dark bg-beige shadow" id="InputDemande" name="InputDemande" required></textarea>
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
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src="assets/JS/contact.js"></script>
<?php require_once "Partials/footer.php";?>