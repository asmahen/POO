<?php
//création objet
class Client
{
    //attributs
    private String $cin;
    private String $nom;
    private String $prenom;
    private String $tel;

    // méthodes
    public function __construct($cin, $nom, $prenom, $tel)
    {
        $this ->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
    }

    public function afficher(): void        
    {
        echo "donner le CIN: ".$this->cin.PHP_EOL;
        echo "donner le nom: ".$this->nom.PHP_EOL;
        echo "donner le prénom: ".$this->prenom.PHP_EOL;
        echo "donner le télephone: ".$this->tel.PHP_EOL;
    }











    /**
     * Get the value of cin
     */ 
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set the value of cin
     *
     * @return  self
     */ 
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
}

?>