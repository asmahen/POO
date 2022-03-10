<?php



class Utilisateur extends Personne
{
    // attributs
    private String $login;
    private String $password;
    private String $service;
    // crée une varialbe de type Profil 
    private Profil $profil;

    // méthodes
    // construct
    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $profil, $login, $password, $service)
    {
        // inclus le construct de Personne
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);

        // passe en paramettre $profil qui appel la classe profil($libelle, $code)
        $this->profil = $profil;
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
    }

    // méthodes pour augmenter le salaire sous certaines conditions
    public function calculerSalaire(): float
    {
        // condition si manager +10%
        if ($this->profil->getCode() === "MN") {
            return parent::calculerSalaire() * 1.10;
        }
        // condition si DRH +40%
        if ($this->profil->getCode() === "DG") {
            return parent::calculerSalaire() * 1.40;
        }
        // sinon pas d'augmentation
        else {
            return 0;
        }
    }

    public function afficher(): void
    {
        // pour récupérer le libelle se lit dans profil de cet utilisateur recupère le libelle du profil
        echo parent::afficher() . "Fonction: " . $this->profil->getLibelle() . PHP_EOL . "Salaire augmenté: " . $this->calculerSalaire() . "€" . PHP_EOL;
        echo PHP_EOL;
    }



    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }


    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Get the value of service
     */
    public function getService()
    {
        return $this->service;
    }


    /**
     * Get the value of profil
     */
    public function getProfil()
    {
        return $this->profil;
    }
}
