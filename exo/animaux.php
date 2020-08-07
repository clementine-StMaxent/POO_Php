<?php

class Animaux
{
    public $crier;
    public $nom;


    public function __construct($nom, $crier) {
        $this->nom = $nom;
        $this->crier = $crier;
    }

    public function getNom() 
    {
        return $this->nom;
    }
    public function getcrier() 
    {
        return $this->crier;
    }
}

class Chat extends Animaux{

}
class Reposer{
    public $dormir;

    public function __construct($dormir) {
        $this->dormir = $dormir;
    }
    
    public function getDormir(){
        return $this->dormir;
    }    
    
}

$chien = new Animaux("Cloclo", "wofwof");
echo $chien->getNom() . "<br/>" . $chien->getcrier();

$chat = new Animaux("Nala", "Miaou");
echo "<br/>" .$chat->getNom() . "<br/>" . $chat->getcrier() ;
$chat = new Reposer("Elle dort beaucoup");
echo "<br/>" . $chat->getDormir();