<?php


abstract class Vente
{

    abstract protected function chiffre_affaire();
    abstract protected function deficite($total);

    public  function vente()
    {
        print $this->chiffre_affaire() . "<br/>";
    }
}

class Magasin extends Vente{
    protected function chiffre_affaire(){
    }

    public function deficite($total){
        return "{$total} du déficite de l'entreprise 1";
    }
}
class Magasin2 extends Vente{
    protected function chiffre_affaire(){
    }

    public function deficite($total){
        return "{$total} du déficite de l'entreprise 2";
    }
}

$mag1 = new Magasin;
$mag1->vente();
echo $mag1->deficite("50 000 €");

$mag2 = new Magasin2;
$mag2->vente();
echo $mag2->deficite("60 000");