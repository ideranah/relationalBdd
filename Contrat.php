<?php

class Contrat {

    private $id;
    private $nomBabysitter;
    private $prenomBabysitter;
    private $ageBabysitter;
    private $nomParent;
    private $prenomParent;
    private $adresse;
    private $nomEnfant;
    private $prenomEnfant;
    private $ageEnfant;
    private $dateDebut;

    function __set($name,$value){

    }

    function getNomBabysitter(){
        return $this->nomBabysitter;
    }

    function getPrenomBabysitter(){
        return $this->prenomBabysitter;
    }


    function getAgeBabysitter(){
        return $this->ageBabysitter;
    }

    function getNomParent(){
        return $this->nomParent;
    }    
    function getPrenomParent(){
        return $this->prenomParent;
    }

    function getAdresse(){
        return $this->adresse;
    }

    function getNomEnfant(){
        return $this->nomEnfant;
    }
    function getPrenomEnfant(){
        return $this->prenomEnfant;
    }
    function getAgeEnfant(){
        return $this->ageEnfant;
    }
    function getDateDebut(){
        return $this->dateDebut;
    }

}


?>
