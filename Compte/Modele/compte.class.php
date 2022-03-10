<?php
include '../Modele/client.class.php';

// creation objet
class Compte
{
    // attributs
    private $solde;

    // le Type Client est affecté à la variable propriétaire
    private Client $proprietaire;
    private $code;
    // pour déclarer une variable de class on utilise static
    private static int $compteur=0;
    
    // méthodes
    public function __construct($cin, $nom, $prenom, $tel, $solde)
    {
        $this->solde = $solde;
        $this->proprietaire= new Client($cin, $nom, $prenom, $tel);
        //pour incrémenter le compteur de +1 
        self::$compteur= self::$compteur+1;
        $this->code = self::$compteur;
    }

    public function crediter($somme): void  
    {
        $this->solde= $this->solde+$somme;
        echo "opération bien effectuée";
    }

    public function crediterCpt($somme, $compte): void
    {
        // ajoute à ce compte la somme
        
        $this->solde= $this->solde+$somme;       
        echo "opération bien effectuée".PHP_EOL;

        // retire du compte extérieur la somme
        $compte->solde=$compte->solde-$somme;
        echo "opération bien effectuée".PHP_EOL;
    }

    public function debiter($somme): void
    {
        $this->solde= $this->solde-$somme;
        echo "opération bien effectuée".PHP_EOL;
    }

    public function debiterCpt($somme,$compte):void
    {
        // retire sur ce compte la somme
        $this->solde= $this->solde - $somme.PHP_EOL;
        // ajoute la somme sur le compte extérieur
        $compte->solde= $compte->solde+$somme.PHP_EOL;

    }

    public function afficherResumeCpt(): void
    {
        // self:: fait référence à l'attribut de l'objet et s'utilise avec une variable static
        echo "Détails du compte: ".PHP_EOL;
        echo "***********************".PHP_EOL;
        echo "Numéro de compte:".$this->code.PHP_EOL;
        echo "Solde du compte: ".$this->solde.PHP_EOL;
        echo "Propriétaire du compte: ".PHP_EOL;
        // appel de la fonction afficher de l'objet client qui a été instanciée ds propriétaire
        echo $this->proprietaire->afficher().PHP_EOL;
        
    }


    public function afficherNbCompte(): void
    {
        echo "le nombre de compte existant: ".self::$compteur;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Get the value of compteur
     */ 
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Get the value of proprietaire
     */ 
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     *
     * @return  self
     */ 
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
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
}








?>