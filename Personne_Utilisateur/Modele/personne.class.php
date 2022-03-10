<?php
class Personne
{
    // attributs
    protected int $id;
    protected String $nom;
    protected String $prenom;
    protected String $mail;
    protected String $telephone;
    protected float $salaire;
    private static int $compteur = 0;

    // méthodes

    // méthode magique construct
    public function __construct($nom, $prenom, $mail, $telephone, $salaire)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;

        //pour incrémenter l'id de +1 
        self::$compteur = self::$compteur + 1;
        $this->id = self::$compteur;
    }

    // Méthode calcule salaire
    public function calculerSalaire(): float
    {
        return $this->salaire;
    }

    // Méthode afficher
    public function afficher(): void
    {
        echo "Id: " . $this->id . PHP_EOL;
        echo "Nom: " . $this->nom . PHP_EOL;
        echo "Prenom: " . $this->prenom . PHP_EOL;
        echo "Mail: " . $this->mail . PHP_EOL;
        echo "Télephone: " . $this->telephone . PHP_EOL;
        echo "Salaire: " . $this->salaire . PHP_EOL;
    }



    /**
     * Get the value of compteur
     */
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set the value of compteur
     *
     * @return  self
     */
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }
}
