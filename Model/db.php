<?php 

function dbconnect(){

    try{

        $pdo = new PDO('mysql:host=localhost;dbname=theDistrict','admin','Afpa1234');

        return $pdo; 

    }catch(PDOException $e){

        echo $e->getMessage();

    }
   
}