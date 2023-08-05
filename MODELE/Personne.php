<?php
class Personne {
    protected $ID;
    protected $NOM;
    protected $ADRESSE;
    protected $NUMERO_TELEPHONE;
    protected $ADRESSE_EMAIL;
    protected $SEXE;
    protected $STATUT;
    protected $Mot_de_pass;

    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
        $this->ID = $row["id"];
        $this->NOM = $row["nom"];
        $this->ADRESSE = $row["adresse"];
        $this->NUMERO_TELEPHONE = $row["numero_telephone"];
        $this->ADRESSE_EMAIL = $row["adresse_email"];
        $this->SEXE = $row["sexe"];
        $this->STATUT = $row["statut"];
        $this->Mot_de_pass = $row["mot_de_pass"];
    }

    public function Affichage(){
        echo "Personne ".$this->ID." ".$this->NOM." ".$this->ADRESSE." ".$this->NUMERO_TELEPHONE." ".$this->ADRESSE_EMAIL." ".$this->SEXE." ".$this->STATUT." ".$this->Mot_de_pass;
    }

    public function getID(){
        return $this->ID;
    }

    public function getNom(){
        return $this->NOM;
    }

    public function getAdresse(){
        return $this->ADRESSE;
    }

    public function getNumeroTelephone(){
        return $this->NUMERO_TELEPHONE;
    }

    public function getAdresseEmail(){
        return $this->ADRESSE_EMAIL;
    }

    public function getSexe(){
        return $this->SEXE;
    }

    public function getStatut(){
        return $this->STATUT;
    }

    public function setNom($nom){
        $this->NOM = $nom;
    }

    public function setAdresse($adresse){
        $this->ADRESSE = $adresse;
    }

    public function setNumeroTelephone($numeroTelephone){
        $this->NUMERO_TELEPHONE = $numeroTelephone;
    }

    public function setAdresseEmail($adresseEmail){
        $this->ADRESSE_EMAIL = $adresseEmail;
    }

    public function setSexe($sexe){
        $this->SEXE = $sexe;
    }

    public function setStatut($statut){
        $this->STATUT = $statut;
    }
    public function setMotdepass($motDePass){
        $this->Mot_de_pass = $motDePass;
    }

    public function getNomComplet(){
        return $this->NOM;
    }
}
