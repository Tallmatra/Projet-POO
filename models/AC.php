<?php
class AC extends User{
    // OneToMany => Inscription
    // 1iere approche
    private array $inscriptions;

   // 2ieme approche 
   // fonctions navigationnels: ceux sont des des fonctions issus des associations
public function inscriptions():array{
    return [];
}
    public function  __construct()
    {
     $this->role="ROLE_AC";  
     $this-> inscriptions=[];

    }
//ManyToOne => AnneeScolaire
public function anneeScolaire():AnneeScolaire{
    return new AnneeScolaire();

}


} 