<?php
  require_once 'Model/Managers/DAO.php';

  $plats = DAO::getPlats();

  require_once 'Views/platsView.php';