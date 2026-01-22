<?php

//Créer un tableau simple

$animaux = ["Chat", "Chien", "Lapin"];
echo "Premier animal : " . $animaux[0] . "<br>";


//Parcourir un tableau simple

foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
}



//Étape 3 : Créer un tableau associatif

$voiture = [
    "marque" => "Toyota",
    "modele" => "Corolla",
    "année" => 2020
];
echo "Modèle : " . $voiture["modele"] . "<br>";





// Ajouter et supprimer des éléments

$fruits = ["Pomme", "Banane"];
array_push($fruits, "Mangue"); // Ajoute "Mangue"
unset($fruits[1]); // Supprime "Banane"


// COUNT()

echo "Nombre de fruits : " . count($fruits);













?>