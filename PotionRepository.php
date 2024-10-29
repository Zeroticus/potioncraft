<?php

require_once 'PotionClass.php';
class PotionRepository {
    private $potion;


    public function __construct() {
        $this->potion = new Potion();
    }
    
    public function addToPotion($naam, $kleur, $hoeveelheid) {
        $ingredient = new Ingredient($naam, $kleur, $hoeveelheid);
        $this->potion->addIngredient($ingredient);
    }

    public function displayPotionIngredients(){
        return $this->potion->displayIngredients();
    }
}