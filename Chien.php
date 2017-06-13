<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Chien
 *
 * @author seb
 */
class Chien {

    public $nom;
    public $race;
    public $dateDeNaissance;
    public $couleur;
    public function aboyer(){
        echo 'woof woof';
    }
    
    public function __construct($nom,$race,$date,$couleur) {
        $this->couleur = $couleur;
        $this->nom = $nom;
        $this->race = $race;
        $this->dateDeNaissance = $date;
        
    }
    public function __toString(){
        return "<br/>Mon nom est ".$this->nom."<br/>Je suis un ".
                $this->race."<br/>Je suis né le ".
                $this->dateDeNaissance."<br/>Je suis ".
                $this->couleur;
    }
}
