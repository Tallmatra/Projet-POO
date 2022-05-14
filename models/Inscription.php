<?php
class Inscription{
//on a 3 type d attributs:
// Attribut d Instances
// Attributs de classe
// Attributs navigationnels: ceux sont des attributs issus des associations

//ManyToOne => AC
 public function ac():AC{
     return new AC();

 }    

}