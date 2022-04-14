<?php

class Titulaire
{
    private $nom;
    private $prenom;
    private $birth;
    private $ville;


    function __construct($nom, $prenom, $birth, $ville)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_birth = $birth;
        $this->_ville = $ville;
        $this->_comptes = [];
    }
    public function ajouterCompte(Compte $_compte)
    {
        $this->_comptes[] = $_compte;
    }
    public function afficherComptes()
    {
        echo "Les comptes de $this sont :<br/><ul>";
        foreach ($this->_comptes as $compte) {
            echo "<li>$compte</li>";
        }
        echo "</ul>";
    }

    public function getAge()
    {
        $age = $this->_birth;
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($this->_birth), date_create($aujourdhui));
        return $diff->format('%y');
    }
    public function setAge(string $age)
    {
        $this->Age = $age;
        return $this;
    }
    public function __toString()
    {
        return $this->_nom . " " . $this->_prenom . "<br/> née le <br\>" . $this->_birth . " (" . $this->getAge() . " ans) à " . $this->_ville . "";
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
     * Get the value of birth
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set the value of birth
     *
     * @return  self
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
}
