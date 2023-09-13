<!-- dans database.php -->
<!-- créer la classe DBConnect permettant se connecter à la base de donnée -->
<?php

// methode avec constructor
// class DbConnect{
//     public $connexioDataBase;
    
//     public function __construct(){
//     try{
//     $this->connexioDataBase = new PDO("mysql:host=db.poo.com;dbname=hotel_db", "admin", "admin");
//     }catch(PDOException $e){
//     $this->connexioDataBase = $e->getMessage();
//     }
//     }


class dbConnect{
    public function dbConnexion(){
        $connexion = null;
        try {
            $connexion = new PDO("mysql:host=localhost;dbname=cours_db","root","");
        } catch (PDOException $e) {
            $connexion = $e->getMessage();
        }
        return $connexion;
    }
}
?>