<?php
    require_once 'Modeldb.php';

    class DAO {
        public static function getCategoriePop()
        {
            $bdd = dbconnect();
            $query = 'SELECT image from categorie WHERE plat';
        }
    }