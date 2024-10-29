<?php

require_once 'IngredientClass.php';


class IngredientRepository {
    private $ingredients = [];
    
    public function addIngredient($naam, $kleur, $hoeveelheid) {
        $ingredient = new Ingredient($naam, $kleur, $hoeveelheid);
        $this->ingredients[$naam] = $ingredient;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function findIngredient($naam,){
        if (isset($this->ingredients[$naam])) {
        return $this->ingredients[$naam];
    }else{
        return null;
        }
    }
}

