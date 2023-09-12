 <!-- dans utilisateur.php -->
 <?php 

require_once "database.php";

// créer la classe Utilisateur avec les propriétés: 
// nom, prénom, émail, mot de passe 
class Utilisateur{
    // attributs
    private $nom;
    private $prenom;
    private $email;
    private $mdp;

    // constructeur
    public function __construct($nom,$prenom,$email,$mdp)
    {
        $this->nom = $nom; 
        $this->prenom = $prenom; 
        $this->email = $email; 
        $this->mdp = $mdp; 
    }

    // les méthodes : s'inscrire, se connecter, se déconnnecter

    public function inscription(){
        // créer une instance db
        $db = new dbConnect();

        // se connecter à la bd
        $connexion=$db->dbConnexion();

        // préparer la requête
        $request = $connexion->prepare("INSERT INTO utilisateurs (nom,prenom,email,mdp) VALUES (?,?,?,?)");

        try {
            // éxecuter la requête
            $request->execute(array($this->nom,$this ->prenom,$this ->email,$this ->mdp));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}



?>