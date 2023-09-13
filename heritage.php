<?php 
// classe Humain qui sera la mére de Magicien et pATISSIER
class Humain{
    // attributs communs aux classe filles
    protected $nom;
    protected $prenom;

    // le constructeur
    public function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // methodes commune aux classes filles
    public function dormir(){
        echo "je fais dodo";
    }
}
// classe magicien qui étend la classe Humain du coup magicien va hériter des propriétées et méthodes de Humain
class Magicien extends Humain{
    public $baguette;

    public function __construct($nom,$prenom,$baguette){
        // $this->nom = $nom;
        // $this->prenom = $prenom; ou 
        parent::__construct($nom, $prenom);
        $this->baguette = $baguette;
        
    }
    
    public function faireUnTourDeMagie(){
        echo "Bonjour c'est ".$this->prenom." ". $this->nom." ,   j'ai la ". $this->baguette.  ", waouh voici un petit lapin sorti du châpeau";
    }
}
// classe pâtissier
class Patissier extends Humain{
    public $batteur = "électrique. ";

    // méthode propre à la pâtissière
    public function faireDeBonGateau(){
        echo "Bonjour c'est ".$this->prenom." ". $this->nom." J'ai un super batteur ".$this->batteur. " Miam miam voici un délicieux gâteau";
    }
}

// instancier un magicien
$magic = new Magicien("Julien", "le magicien", "baguette de sureau");
$magic->faireUnTourDeMagie();
echo "<br>";

// créer une pâtissière 
$patissiere = new Patissier("Chérie", "Nawal");
$patissiere->faireDeBonGateau();
?>