<?php
class Personne{
    // attribut d instance c est attribut cree pour ck objet 
    private int $id;
    private string $nomComplet;
    // attributs de classes ou statics ceux sont des attributs partagés à l ensemble des objets de la classe
    private  static int $nbrePersonne;

    //pour creer un objet on fait appel à constructeur
    public function __construct()
    {

    }
    // Pour qu un attribut qui est en private soit visible au niveau de l interface on fait appel aux methodes Getters et Setters
    // les Getters sont des methodes publics qui permettent d obtenir la valeur d un attributs private ou prototype au niveau de l interface de l objet 
    // les Setters sont des methodes qui permettent de modifier la valeur d un attribut private ou prototype au niveau de l interface de l objet
}    