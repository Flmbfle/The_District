<?php
    require_once 'Model/db.php';
    require_once 'Model/Classes/Category.class.php';
    require_once 'Model/Classes/Plats.class.php';

    class DAO {

            //CATEGORIE POPULAIRE
        public static function getCategoriePop() {
    
            $bdd = dbconnect();
    
            try {
    
                $query = "SELECT c.id, c.nom_categorie, c.image, COUNT(co.id) AS total_commandes
                FROM categorie c
                LEFT JOIN plat p ON c.id = p.id_categorie
                LEFT JOIN commande co ON p.id = co.id_plat
                GROUP BY c.id
                ORDER BY total_commandes DESC
                LIMIT 6"; 
    
                $stmt = $bdd->prepare($query);
                $stmt->execute();
    
                $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                return $categories;
            } catch (PDOException $e) {
                exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
            }
        }

            //PLATS POPULAIRE
        public static function getPlatsPop() {

            $bdd = dbconnect();
        
            try {
        
                $query = "SELECT p.id, p.libelle, p.description, p.prix, p.image, COUNT(co.id) AS total_commandes
                FROM plat p
                LEFT JOIN commande co ON p.id = co.id_plat
                GROUP BY p.id
                ORDER BY total_commandes DESC
                LIMIT 3"; 
        
                $stmt = $bdd->prepare($query);
                $stmt->execute();
        
                $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
                return $plats;
            } catch (PDOException $e) {
                exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
            }
        }    

        public static function get_Act_Cat()
        {
            $bdd = dbconnect();

            try {

                $query = 
                "SELECT *
                FROM categorie c
                WHERE c.active = 'Yes'
                LIMIT 6";

                $stmt = $bdd->prepare($query);
                $stmt->execute();

                $categorieAct = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $categorieAct;
            } catch (PDOException $e) {
                exit("Erreur lors de l'exécution de la requete : " . $e->getMessage());
            }
        }

        public static function getToutesLesCategories() {
            $bdd = dbconnect();
    
            try {
                $query = "SELECT * FROM categorie";
                $stmt = $bdd->prepare($query);
                $stmt->execute();
    
                $toutesLesCategories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                return $toutesLesCategories;
            } catch (PDOException $e) {
                exit("Erreur lors de l'exécution de la requete : " . $e->getMessage());
            }
        }
    
        public static function getAutresCategories() {
            $categorieAct = self::get_Act_Cat();
            $toutesLesCategories = self::getToutesLesCategories();
    
            $categorieActIds = array_column($categorieAct, 'id');
    
            return array_filter($toutesLesCategories, function($categorie) use ($categorieActIds) {
                return !in_array($categorie['id'], $categorieActIds);
            });
        }
    }