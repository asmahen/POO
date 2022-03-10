<?php
//création objet Livre
class Livre{
    //attribut
    private $titre;
    private $auteur;
    private $prix;

    //methodes
    public function __construct($titre, $auteur, $prix)
    {
        $this -> titre = $titre;
        $this -> auteur = $auteur;
        $this -> prix = $prix;  
    }
     
    public function afficher(): void
    {
        echo "le titre est: ".$this->titre.PHP_EOL;
        echo "l'auteur est: ".$this ->auteur.PHP_EOL;
        echo "le prix est: ".$this ->prix."€".PHP_EOL;
        
    }
        

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}
 


?>