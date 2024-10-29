<?php
//laad files
require_once "Classes/PotionClass.php";
require_once "Classes/PotionRepository.php";
require_once "Classes/IngredientClass.php";
require_once "Classes/IngredientRepository.php";

//start
session_start();


//laad repo's van sessie
if (!isset($_SESSION["ingredientRep"])) {
    $ingredientRep = new IngredientRepository();
    $_SESSION['ingredientRep'] = serialize($ingredientRep);
}else{
    $ingredientRep = unserialize($_SESSION['ingredientRep']);
}

if (!isset($_SESSION['potionRep'])) {
    $potionRep = new PotionRepository();
    $_SESSION['potionRep'] = serialize($potionRep);
}else{
    $potionRep = unserialize($_SESSION['potionRep']);
}

//Formulier
$ingredientRepository = $_SESSION["ingredientRep"];
$potionRepository = $_SESSION["potionRep"];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $naam = $_POST["naam"];
    $kleur = $_POST["kleur"];
    $hoeveelheid = (int)$_POST["hoeveelheid"];

    //naar Ingredientrepository
    $ingredientRep->addIngredient($naam, $kleur, $hoeveelheid);

    //toevoeging aan potion]
    $potionRep->addToPotion($naam, $kleur, $hoeveelheid);

    //terug opslaan sessie
    $_SESSION["ingredientRep"] = serialize($ingredientRep);
    $_SESSION["potionRep"] = serialize($potionRep);
}

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Potion Crafting</title>
    </head>
    <body>
        <h1>Potion Crafting</h1>
        
        <form method="POST" action = "">
            <label for = "naam">Ingredient Name:</label>
            <input type = "text" id = "naam" name="naam" required><br><br>

            <label for = "kleur">Ingredient Color:</label>
            <input type = "text" id = "kleur" name="kleur" required><br><br>

            <label for = "hoeveelheid">Ingredient Hoeveelheid:</label> 
            <input type = "number" id = "hoeveelheid" name="hoeveelheid" min = "1" required><br><br>

            <input type = "submit" value = "Add Ingredient">
            </form>

            <h2> Your Current Ingredients</h2>
            <div>
                <?php
                    echo $potionRep->displayPotionIngredients();
                ?>
            </div>
</body>
</html>
