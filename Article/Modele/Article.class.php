<?php
//création objet
class Article
{
    //attribut
    private const TXTVA= 20;
    private $reference;
    private $designation;
    private $prixHT;
    
    // methodes
    // le construct
    public function __construct($reference=0, $designation="", $prixHT=0)
    {
        $this -> reference = $reference;
        $this -> designation = $designation;
        $this -> prixHT = $prixHT;

    }
    // fonction calcul prix TTC
    public function calculerPrixTTC(): float
    {
       return ($this->prixHT + ($this->prixHT * $this ::TXTVA/100));
    }

    // fonction affichage article
    public function afficherArticle(): void
    {
        echo "le taux de TVA est:".$this::TXTVA.PHP_EOL;
        echo "Référence: ".$this->reference.PHP_EOL;
        echo "Désignation: ".$this->designation.PHP_EOL;
        echo "Prix HT: ".$this->prixHT.PHP_EOL;
        echo "le prix TTC est ".$this->calculerPrixTTC()."€".PHP_EOL;
    }
  









    /**
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the value of designation
     */ 
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set the value of designation
     *
     * @return  self
     */ 
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get the value of prixHT
     */ 
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * Set the value of prixHT
     *
     * @return  self
     */ 
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;

        return $this;
    }

   





    /**
     * Get the value of tauxTVA
     */ 
    public function getTauxTVA()
    {
        return $this->tauxTVA;
    }

    /**
     * Set the value of tauxTVA
     *
     * @return  self
     */ 
    public function setTauxTVA($tauxTVA)
    {
        $this->tauxTVA = $tauxTVA;

        return $this;
    }
}





?>
