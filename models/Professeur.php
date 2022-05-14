<?php
class Professeur extends Personne{
   // Fonctions navigationnelles
   //ManyToMany avec classe
   public function classes():array{
       return [];
   } 

}