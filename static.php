<?php
class CompteBancaire{
    // déclarer les propriétés normales
    private $numero;
    private $nom;
    private $solde;
   
    // déclarer une propriété statique
    public static $nombreDeCompte = 0;
    public static $listCompte =[];
    // le constructeur
    public function __construct($solde,$nom)
    {
        // pour manipuler une propriété statique dans la classe on utilise le mot clé self suivi des "::"
        self::$nombreDeCompte++;
        $this->numero = "FR 76 00".self::$nombreDeCompte;
        $this->solde = $solde;
        $this->nom = $nom;
        array_push(self::$listCompte,$this);
    }

     // creer un geter qui permet de recuperer le numero de compte
     public function getNumero(){
        return $this->numero;
    }

     // creer un geter qui permet de recuperer le solde du compte
     public function getSolde(){
        return $this->solde;
    }

     // creer un geter qui permet de recuperer le solde du compte
    //  public function getNom(){
    //     return $this->nom;
    // }

    // créer une méthode déposer qui prend 1 paramètre :
    // le montant à déposer pour ajouter la somme dans le compte concerné

    public function deposer($montant){
         $this->solde+=$montant;
    }
    
    // une méthode retirer qui prend 1 paramètre: le montant à retirer , elle permet de retirer le montant du compte concerné
    public function retirer($montant){
         $this->solde-=$montant;

    }
    
    // une méthode transférer qui prend 2 paramètres:
    // le montant et le numero de compte expediteur elle permet de transferer un montant d'un compte a un autre
     // le constructeur
     public function transferer($numero, $montant)
     {  
       foreach(self::$listCompte as $compte){
            if($compte->numero == $numero){
                $compte->solde+=$montant;
                $this->solde-=$montant;
                return;
            }
       }
     }

}
// chaque compte bancaire est préfixé par cette chaîne de caractère "FR 76 00"
// créer un compte
$compte1 = new CompteBancaire(10,"Alin Mansita");
echo $compte1->getNumero()."<br>";
$compte1->deposer(20);
echo $compte1->getSolde()."<br>";
// echo $compte1->getNom()." "." possède :".$compte1->getSolde()."€"." "." puis à déposé 50€ soit un total de :".$compte1->deposer(50)."€"." "." à retiré 10€ soit un solde de :".$compte1->retirer(10)."€"."<br>";

$compte1->transferer(1,90);


$compte2 = new CompteBancaire(100, "Wassila Boukedroun");
echo $compte2->getNumero()."<br>";
$compte2->transferer($compte1->getNumero(), 50);
echo "Alin Mansita possède: ".$compte1->getSolde()."€"."<br>";
echo "Wassila Boukedroun possède: ".$compte2->getSolde()."€";

?>