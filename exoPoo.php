<!-- ************************************************** Exercice ****************************************************** -->
<?php
class Moule{
 // attributs du gateau
 public $gout;
 public $texture;
 
 // les methodes du gateau
 public function nourrir(){
 echo "je suis un gateau au ".$this->gout." ".$this->texture." je vous regale <br>";
 echo "<pre>";
 }
}
// creer un gateau au chocolat fondant
$gateauAuChocolat = new Moule(); // instancier un objet
$gateauAuChocolat->gout = "chocolat";
$gateauAuChocolat->texture = "fondant";
$gateauAuChocolat->nourrir();
 
$gateauAuCitron = new Moule(); // instancier un objet
$gateauAuCitron->gout = "citron";
$gateauAuCitron->texture = "fondant";
$gateauAuCitron->nourrir();

// *********************************************************************************************************************

// creez une classe Voiture avec les attributs suivants:
// couleur, marque,model et les methodes suivantes:
// rouler, accelere, freiner
class Voiture{

     // attributs de la voiture
    public $couleur;
    public $marque;
    public $model;

    // pour la methode rouler afficher le texte "Je roule"
    public function rouler(){
        echo "<pre>";
        echo "Je roule </br>";
        echo "</pre>";
    }
    // pour la methode accelerer afficher le texte "J'accelere"
    public function accelerer(){
        echo "J'accelere </br>";
    }
    // pour la methode freiner afficher le texte "Je freine"
    public function freiner(){
        echo "<pre>";
        echo "Je freine ";
    }


    // pour la methode conclusion
    public function conclusion(){
        echo "<pre>";
        echo "Je suis une voiture de marque ".$this->marque." modèle ".$this->model." de couleur ".$this->couleur." qui peut rouler, accélérer et freiner";
    }
}

// creez une voiture de marque peugeot de model 308 et de couleur noire
// les methodes de la voiture
$car = new Voiture();
$car->marque = "peugeot";
$car->model = 308;
$car->couleur = "noire";
$car->rouler();
$car->accelerer();
$car->freiner();
$car->conclusion();



// ************************************************** classe voiture avec constructeur
class VoitureAvecConstructeur{
    // attributs
    public $couleur;
    public $marque;
    public $modele;

    // constructeur
    public function __construct($brand,$model,$color,)
    {
        $this ->marque = $brand; 
        $this ->modele = $model; 
        $this ->couleur = $color; 
    }

    // pour la methode rouler afficher le texte "Je roule"
    public function rouler(){
        echo "<pre>";
        echo "Je roule </br>";
        echo "</pre>";
    }
    // pour la methode accelerer afficher le texte "J'accelere"
    public function accelerer(){
        echo "J'accelere </br>";
    }
    // pour la methode freiner afficher le texte "Je freine"
    public function freiner(){
        echo "<pre>";
        echo "Je freine ";
    }

     // pour la methode conclusion
     public function conclusion(){
        echo "<pre>";
        echo "Je suis une voiture de marque ".$this->marque." modèle ".$this->modele." de couleur ".$this->couleur." qui peut rouler, accélérer et freiner";
        echo "<pre>";
    }

}

// creer une voiture
$voiture2 = new VoitureAvecConstructeur("Citroen","C4","rouge");
$voiture2->rouler();
$voiture2->accelerer();
$voiture2->freiner();
$voiture2->conclusion();


// ***************************************************  Cat  *******************************************************************
class Cat{
    // attributs
    private $nom;
    private $couleur;
    private $race;
    private $age;

    // constructeur de la classe
    public function __construct($nom,$couleur,$race,$age)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->race = $race;
        $this->age = $age;
    }

    // creer le geter et le seter de la propriete age
    // le geter son role c'est de recupérer la valeur de la propriété déclaré avec le mot clé private
    public function getAge(){
        return$this->age;
    }

    // le rôle du seter est de mettre à jour la propriété en question déclaré avec le mot clé private
    public function setAge($newAge){
        $this->age = $newAge;;
    }

}

// creer un chat
$chat1 = new Cat("cynthia","beige","siamois",3);
echo $chat1->getAge()."<br>"."<br>";
$chat1->setAge(4);
echo $chat1->getAge();


