<!-- dans action.php
inclure le fichier utilisateur.php
récupérer les informations du formulaire
appeler la méthode inscription pour enregistrer les données dans la bd -->
<?php
session_start();
require_once "utilisateur.php"; 
// require_once "index.php";

if(isset($_POST["submit"])){
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);

    // creer un nouveau utilisateur
    // créer une instance de la classe Utilisateur
    $mdp = password_hash($mdp,PASSWORD_DEFAULT); 
    $utlisateur1 = new Utilisateur($nom,$prenom,$email,$mdp);
    $utlisateur1->inscription();
  
}

if(isset($_POST['connexion'])){
    $email = $_POST['email'];
    $password = $_POST['mdp'];
    
    // appel de la methode statique connexion
    Utilisateur::connexion($email,$password);
}

?>