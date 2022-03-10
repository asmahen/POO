<?php
//création objet
Class Rectangle{
    //attributs
    private $longueur;
    private $largeur;

    //methode pour le construct
    public function __construct($long, $larg)
    {
        $this -> longueur= $long;
        $this -> largeur= $larg;
    }

    // methode pour calculer le périmètre du rectangle
    public function perimetre(): float
    {
        return 2*($this->longueur + $this->largeur).PHP_EOL;
    }

    // methode pour calculer l'air du rectangle
    public function air(): float
    {
        return $this->longueur * $this->largeur.PHP_EOL;
        
    }

    // methode pour verifier si le rectangle est carré
    public function isCarre()
    {
        return $this->longueur === $this->largeur ? "c'est un carré": "ce n'est pas un carré";
        
    }


    // methode pour afficher le rectangle (retour void parce qu'on veut afficher quelque chose)
    public function afficherRectangle(): void
    {
        echo "le périmétre est: ".$this->perimetre().PHP_EOL;
        echo "la surface est ".$this ->air().PHP_EOL;
        echo $this ->isCarre().PHP_EOL;
        
    }


// insertion des Getters & Setters des attributs privates
    /**
     * Get the value of longueur
     */ 
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set the value of longueur
     *
     * @return  self
     */ 
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get the value of largeur
     */ 
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     *
     * @return  self
     */ 
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }
}




?>