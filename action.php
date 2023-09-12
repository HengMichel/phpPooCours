<!-- dans action.php
inclure le fichier utilisateur.php
récupérer les informations du formulaire
appeler la méthode inscription pour enregistrer les données dans la bd -->
<?php
require_once "utilisateur.php"; 
// require_once "index.php";

if(isset($_POST["submit"])){
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);

// creer un nouveau utilisateur
// créer une instance de la classe Utilisateur

    $utlisateur1 = new Utilisateur($nom,$prenom,$email,$mdp);
    $utlisateur1->inscription();

   
}

?>