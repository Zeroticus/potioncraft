<?php


class Ingredient {

        //Mijn ingredient properties
    private string $naam;
    private string $kleur;
    private int $hoeveelheid;

        //Constructor
    public function __construct(string $naam, string $kleur, int $hoeveelheid) {
        $this->naam = $naam;
        $this->kleur = $kleur;
        $this->hoeveelheid = $hoeveelheid;
}

        //Naam returnen
    public function rNaam(){
        return $this->naam;
}
    
        //Kleur returnen
    public function rKleur(){
        return $this->kleur;
}
        //Hoeveelheid returnen
    public function rHoeveelheid(){
        return $this->hoeveelheid;

}
        //Functie voor hoeveelheid plussen
    public function addHoeveelheid($nummer){
        $this->hoeveelheid += $nummer;
    }
}

//Z