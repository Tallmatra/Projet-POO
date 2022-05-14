<?php
// Classes concretes : sont des classes qui produisent des objets
// une classe concréte ne contient que des méthodes concrétes
// une methode concréte est une methode dont on connait sa définition
/*  */
// Classes abstraites: sont des classes qui ne produisent pas d objets et qui est non instanciable
// une classe abstraite contient à la fois des méthodes abstraites et des methodes concrétes
 // une methode abstraite est une methode dont on ne connait pas sa défintion
/*  */
// classe finale ceux sont des classes qui ne peuvent pas avoir de classe fille(pas de relation de spécialisation) 
  abstract  class Personne{
    // attribut d instance c est l attribut cree pour ck objet 
    // lorsqu on attribut est spécifique à chaque objet  on dit qu c est un attribut d instance
    protected  int $id;
    protected string $nomComplet;
    // attributs de classes ou statics ceux sont des attributs partagés à l ensemble des objets de la classe
    private  static int $nbrePersonne;
    // Methodes Abstraites(exple les userCases  )


    //pour creer un objet on fait appel à constructeur
    public function __construct()
    {

    }
    // Pour qu un attribut qui est en private soit visible au niveau de l interface on fait appel aux methodes Getters et Setters
    // les Getters sont des methodes publics qui permettent d obtenir la valeur d un attributs private ou prototype au niveau de l interface de l objet 
    // les Setters sont des methodes qui permettent de modifier la valeur d un attribut private ou prototype au niveau de l interface de l objet

    //Getter
    public function getId():int{
    //$this signifie l objet en cours (l objet qui est entré d utiliser la classe ), on l' utilise lorsqu on a un atttibut d' instance
     return $this->id;
 }
 public function getNomComplet():string{
     return $this->nomComplet;   

 }
 // quand un atttribut de classe on y accéde à travers self , self signifie la classe
 // self:: c est un operateur de porter de classe
 public static function getNbrePersonne(){
    return  self::$nbrePersonne;  
  }

//setters
  public function setID(int $id):self{
     $this->id=$id;
     return $this;
} 
public function setNomComplet(string $nomComplet):self{
    $this->nomComplet=$nomComplet;
    return $this;
}
public  static function setNbrePersonne(int $nbrePersonne):void{
 self::$nbrePersonne=$nbrePersonne;
}
}    