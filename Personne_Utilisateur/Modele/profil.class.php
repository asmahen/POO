<?php
class Profil
{
    // attributs
    private int $id;
    private String $code;
    private String $libelle;
    private static int $compteur = 0;


    // Méthodes

    // construct
    public function __construct($libelle, $code)
    {
        $this->libelle = $libelle;
        $this->code = $code;

        //pour incrémenter le compteur de +1 
        self::$compteur = self::$compteur + 1;
        $this->id = self::$compteur;
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
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }


    /**
     * Get the value of compteur
     */
    public function getCompteur()
    {
        return $this->compteur;
    }
}
