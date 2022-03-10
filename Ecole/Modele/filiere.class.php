<?php


class Filiere  
{
    // attributs
    private int $id;
    private String $code;
    private String $libelle;
    private static int $compteur=0;

    // methodes
    // construct

    public function __construct($libelle)
    {
        $this->libelle= $libelle;

        //pour incrémenter le compteur de +1 
        self::$compteur= self::$compteur+1;
        $this->id = self::$compteur;
    }

    public function __toString()
    {
        return "Filière: " . $this -> libelle;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}
