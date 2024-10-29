<?php
require "IngredientClass.php";
class Potion {
    private $ingredients = [];

    // ingredient adding
    public function addIngredient(Ingredient $ingredient) {
        $ingredientNaam = $ingredient->rNaam();

        if (isset($this->ingredients[$ingredientNaam])) {
            $this->ingredients[$ingredientNaam]->addHoeveelheid($ingredient->rHoeveelheid());
        } else {
            $this->ingredients[$ingredientNaam] = $ingredient;
    }
}

    //Display
    public function displayIngredients() {
        if (empty($this->ingredients)) {
            echo "Geen ingredienten in potion.";
            }  else {
            foreach ($this->ingredients as $ingredient) {
                echo "Ingredient:". "<br>";
                echo "Naam: " . $ingredient->rNaam() . "<br>";
                echo "Kleur: " . $ingredient->rKleur() ."<br>" ;
                echo "Hoeveelheid: " . $ingredient->rHoeveelheid() . "</p>";
            }
        }
    }
}

//Z


