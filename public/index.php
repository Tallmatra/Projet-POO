
<?php
    //pour produire un objet :
    // 1-il faut inclure le fichier de la classe
     require_once("../models/Personne.php"); 
    require_once("../models/User.php");
    require_once("../models/AC.php");
    require_once("../models/Inscription.php");
    require_once("../models/Classe.php");
    // chargement automatiques pour ce faire il faut installer composer

    // 2-creer Objet ou Instanciation
    /* $pers1=new Personne(); */ // c est pour definir l objet, il fait appel une methode de classe nommée constructeur , il est représenter par la function __construct
  // 3- Donner un etat à un objet  (etat c est la valeur de ces attributs à un instant t)   
 //-> c est l opérateur de portée d instance(objet)
 //$pers1-> c est de demander l interface de la classe(tous les attributs et méthodes publics de la classe)
    /* $pers1->setId(1);  
    $pers1->setNomComplet('Tall Matra');
     
    $pers2=new Personne();
 
    $pers2->setID(2)
          ->setNomComplet('Idrissa Sow');

    echo $pers1->getId();
    echo $pers1->getNomComplet(); 

   // Methode Statique
   Personne ::setNbrePersonne(12); 
   echo  Personne ::getNbrePersonne() ;*/

   $ac=new AC();
   echo $ac->getRole();
   $ins=new Inscription();

   $ins->ac(); 
   $ins->anneeScolaire;
  



 


 


  
   