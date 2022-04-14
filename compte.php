<?php

class Compte
{
    private $libelle;
    private $solde_initial;
    private $devise_monney;
    private $titulaire;

    function __construct($libelle, $solde_initial, $devise_monney, $titulaire)
    {
        $this->libelle = $libelle;
        $this->solde_initial = $solde_initial;
        $this->devise_monney = $devise_monney;
        $this->titulaire = $titulaire;
        $titulaire->ajouterCompte($this);
    }
    public function __toString()
    {
        return $this->libelle . " : " . $this->solde_initial . " " . $this->devise_monney . "";
    }

    public function depot($somme_depot)
    {
        $this->solde_initial += $somme_depot;
        return $this;
    }
    public function retrait($somme_retrait)
    {

        $this->solde_initial -= $somme_retrait;
        return $this;
    }
    public function virement($somme_virement, $compte_cible)
    {
        $this->retrait($somme_virement);
        $compte_cible->depot($somme_virement);
        $aff = "Votre virement de ";
        $aff .= $somme_virement;
        $aff .= "€ à été effectué <br> Solde de ";
        $aff .= "$this->libelle : $this->solde_initial € <br><br>";
        $aff .= "Vous avez reçu un virement de ";
        $aff .= $somme_virement;
        $aff .= "€ <br> Solde de ";
        $aff .= $compte_cible;
        $aff .= "<br><br>";
        return $aff;
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

    /**
     * Get the value of solde_initial
     */
    public function getSolde_initial()
    {
        return $this->solde_initial;
    }

    /**
     * Set the value of solde_initial
     *
     * @return  self
     */
    public function setSolde_initial($solde_initial)
    {
        $this->solde_initial = $solde_initial;

        return $this;
    }

    /**
     * Get the value of devise_monney
     */
    public function getDevise_monney()
    {
        return $this->devise_monney;
    }

    /**
     * Set the value of devise_monney
     *
     * @return  self
     */
    public function setDevise_monney($devise_monney)
    {
        $this->devise_monney = $devise_monney;

        return $this;
    }

    /**
     * Get the value of titulaire
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @return  self
     */
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }
}
