<?php
interface Vehicule {

    public function demarrer();
    public function arreter();
}

class Voiture implements Vehicule
{
    public $couleur;
    public $immatriculation;
    public $vitesse;

    public function __construct($immatriculation, $couleur)
    {
        $this->vitesse = 0;
        $this->immatriculation = $immatriculation;
        $this->couleur = $couleur;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
        //return $this;
    }

    function arreter(){
        $this->vitesse =0;
    }

    public function demarrer(){
        $this->vitesse = 10;
    }

    function accelerer($vitesse)
    {
        //sur une route à 90km
        $this->vitesse += $vitesse;
        echo $this->vitesse > 90 ? "<br>Vous roulez trop vite" : "Vous savez conduire <br/>";
    }

    function info(){
        echo $this;
    }

    function __toString()
    {
        return "<br/> Voiture(".$this->immatriculation.", ".$this->vitesse.",".$this->couleur.")<br/>";
    }

}

class PoliceVoiture extends Voiture
{
    public $amende;

    function __construct($immatriculation){
        parent::__construct($immatriculation, "Blue");
        echo $this->vitesse;
    }

    function sirene(){
        echo "NI NU NI NU";
    }
}

$v1 = new Voiture("titine", "bleu");
$v2 = new Voiture("toto", "bleu");
$pv = new PoliceVoiture("SEMIFIR");

$v1->getCouleur();
$v1->info();
$v1->demarrer();
$v1->accelerer(200);
$v1->info();
$v1->arreter();


$v2->info();
$v2->demarrer();
$v2->accelerer(200);
$v2->arreter();
$pv->info();


function garage(Vehicule $v){
    echo $v;
}

garage($v1);