<?php
  require_once 'Model/Managers/DAO.php';

  $categories = DAO::getCategoriePop();

  require_once 'Views/indexView.php';

