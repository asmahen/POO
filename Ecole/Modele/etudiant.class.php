<?php
include '../Modele/filiere.class.php';
class Etudiant  
{
    // attributs
    private int $id;
    private String $nom;
    private String $prenom;
    private String $dateNaissance;
    private Filiere $filiere;
    private static int $compteur=0;

    // méthodes
    // construct

    public function __construct($nom, $prenom, $dateNaissance, $libelle)
    {
         $this->filiere= new Filiere($libelle);
         $this->nom= $nom;
         $this->prenom= $prenom;
         $this->dateNaissance= $dateNaissance;
         //pour incrémenter le compteur de +1 
         self::$compteur= self::$compteur+1;
         $this->id = self::$compteur;
    }

    public function __toString()
    {
        return "je suis l'étudiant ".$this->nom." ".$this->prenom.
        ", ma date de naissance est ".$this->dateNaissance;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }
}
