<?php
  require_once 'Model/Managers/DAO.php';

  $categorieAct = DAO::get_Act_Cat();
  $categorieDAO = new DAO();

  $categorieAct = $categorieDAO->get_Act_Cat();
  $toutesLesCategories = $categorieDAO->getToutesLesCategories();
  $autresCategories = $categorieDAO->getAutresCategories();

  require_once 'Views/categoryView.php';