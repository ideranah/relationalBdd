<?php
require ("Contrat.php");
class Connexion {

    private $connexion;

    public function __construct(){
    
        $PARAM_hote='localhost';
        $PARAM_port='3306';
        $PARAM_nom_bd='Babysitter';
        $PARAM_utilisateur='adminBaby';
        $PARAM_mot_passe='B@bysitt3r';
        
        try{
            
            $this->connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);
            
        }catch(Exception $e){

            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
            
        }
    }

    public function getContrat($id){
        $stmt=$this->connexion->prepare(
            "SELECT 
            b.nom as nomBabysitter, 
            b.prenom as prenomBabysitter, 
            b.age as ageBabysitter, 
            p.nom as nomParent, 
            p.prenom as prenomParent,
            p.adresse as adresse,
            e.nom as nomEnfant,
            e.prenom as prenomEnfant,
            e.age as ageEnfant,
            c.dateDebut as dateDebut
            FROM Contrat c
            INNER JOIN Parent p
            ON c.parent = p.id
            INNER JOIN Enfant e
            ON c.enfant = e.id
            INNER JOIN Babysitter b
            on c.babysitter = b.id
            WHERE c.id =:id
            ");
        $stmt->execute(array("id"=>$id));
        $contrat = $stmt->fetchObject("Contrat");
        return $contrat;
    }

    function setContrat($contrat){
        
    }

}