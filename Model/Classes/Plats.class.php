<?php 

class Plats {

    private $id;
    private $libelle;
    private $description;
    private $prix;
    private $image;
    private $id_categorie;
    private $active;
    
    public function getId()
    {
        return $this->id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getId_Categorie()
    {
        return $this->id_categorie;
    }

    public function setId_Categorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
}