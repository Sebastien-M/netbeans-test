<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author seb
 */
class Personne {
    
    private $nom;
    private $prenom;
    private $age;
    private $region;
    
    public function __construct($nom,$prenom,$age,$region) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->region = $region;
    }
    public function __toString(){
        return "<p>Nom : ".$this->nom."</p>".
                "<p>Prenom : ".$this->prenom."</p>".
                "<p>Age : ".$this->age."</p>".
                "<p>Region : ".$this->region."</p>";
    }
}