<?php
  require_once 'Model/Managers/DAO.php';

  $categories = DAO::getCategoriePop();
  $categories = DAO::getPlatsPop();

  require_once 'Views/indexView.php';

