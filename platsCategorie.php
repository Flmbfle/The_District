<?php 
  require_once 'Model/Managers/DAO.php';

  if(isset($_GET['categorie_id'])){
    $id = $_GET['categorie_id'];
    $platByCategorie = DAO::getPlatsByCategorie($id);

    require_once 'Views/platsCategorieView.php';
  }

  else {
    echo "Erreur";
  }
