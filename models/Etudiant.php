<?php

class Etudiant extends User{
    private string $matricule;  
    private string $sexe;
    private string $adresse;
    public function __construct()
    { 
       $this->role="ROLE_ETUDIANT" ;
    }
    
     

} 