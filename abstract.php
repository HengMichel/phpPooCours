<?php
abstract class Person{
    public $nom;
    public $prenom;

    public function courir(){}
    public function manger(){}
    public function bouger(){}
    public function danser(){
        echo "je sais danser la salsa et le tango hls";
    }

    public function pleurer(){}
}

class Mecano extends Person{
    
}

class Pilote extends Person{
    // public $nom;
    // public $prenom;

    // public function courir(){}
    // public function manger(){}
    // public function bouger(){}
    // public function danser(){
    //     echo "je sais danser la salsa";
    // }

    // public function pleurer(){}
}

// *************** Exo ********************************

// créer une classe abstraite FormeGeométrique avec les attribut suivantes:
// 1) Surface
// 2) Perimètre
abstract class FormeGeométrique{
    protected $surface;
    protected $perimetre;

    // le constructeur
    public function __construct($surface,$perimetre)
    {
        $this->surface = $surface; 
        $this->perimetre = $perimetre; 
    }
}

// créer la classe Rectangle fille de FormeGeométrique avec les attributs suivant :
// 1) longueur
// 2) largeur et les méthodes calculerSurface et calculerPerimetre
class Rectangle extends FormeGeométrique{
    private $longueur;
    private $largeur;

        // le constructeur
    public function __construct($surface,$perimetre,$longueur,$largeur)
    {
        parent::__construct($surface,$perimetre);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // les méthodes calculerSurface
    public function calculerSurface(){
        return  $this->surface=($this->longueur*$this->largeur);
    }

    // les méthodes calculerPerimetre
    public function calculerPerimetre(){
        return  $this->perimetre=($this->longueur+$this->largeur)*2;
    }
}
// instancier un rectangle calcul périmètre
$rectangle = new Rectangle(0,0,10,5);
$rectangle->calculerPerimetre();
echo "Le périmètre d rectangle est de ".$rectangle->calculerPerimetre()." cm";
echo "<br>";

// instancier un rectangle calcul surface
$rectangle2 = new Rectangle(0,0,10,5);
$rectangle2->calculerSurface();
echo "L'air du rectangle est de ".$rectangle2->calculerSurface()." m²";
echo "<br>";

// créer la classe Cercle fille de FormeGeométrique avec les propriétées suivantes :
// 1) rayon et les methodes calculerSurface et calculerPerimetre
class Cercle extends  FormeGeométrique{
    private $rayon;

    public function __construct($surface,$perimetre,$rayon)
    {
        parent::__construct($surface,$perimetre);
        $this->rayon = $rayon;
    }
    // methodes calculerSurface
    public function calculerSurface(){
        // pow = puissance et 2 = au carré
        return round ($this->surface=M_PI* pow($this->rayon,2));

        // round permet d'avoir seulement 2 chiffres après la virgule
        return round(($this->surface=($this->rayon*$this->rayon)*M_PI),2) ;

    }
    // les méthodes calculerPerimetre
    public function calculerPerimetre(){
        return  round($this->perimetre=(2*M_PI)*$this->rayon);
    }

}
// instancier un cercle calcul surface
$cercle = new  Cercle(0,0,10);
$cercle->calculerSurface();
echo "L'air du cercle est de ".$cercle->calculerSurface()." m²";
echo "<br>";


// instancier un cercle calcul perimètre
$cercle2 = new  Cercle(0,0,10);
$cercle2->calculerPerimetre();
echo "Le périmètre du cercle est de ".$cercle2->calculerPerimetre()." cm";
