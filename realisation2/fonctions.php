<?php

// Vérifie que toutes les informations du patient sont présentes et correctes, et retourne les erreurs éventuelles
function validatePatient ($nom,$prenom,$datedenaissance,$select,$Ntelephone,$Dt_consultation){

$errors = [];

    if(empty($nom)) $errors[] = "Nom obligatoire";
    if(empty($prenom)) $errors[] = "Prenom obligatoire";
    if(empty($datedenaissance)) $errors[] = "Date de naissance obligatoire";
    if(empty($select)) $errors[] = "Sexe obligatoire";
    if(empty($Ntelephone) || !is_numeric($Ntelephone) || strlen($Ntelephone) != 10) $errors[] = "Numéro téléphone invalide";
    if( empty($Dt_consultation)) $errors[] = "Date consultation obligatoire";
    if(strtotime($datedenaissance) > time()) $errors[] = "Date de naissance invalide";
    if(strtotime($Dt_consultation) > time()) $errors[] = "Date consultation invalide";

  return $errors;
  }



// Vérifie que les valeurs de la consultation sont dans des plages valides et retourne les erreurs éventuelles
function validateConsultation($temperature, $poids, $taille, $tension_sys, $tension_dia){
    $errors = [];
    if($temperature < 35 || $temperature > 42) $errors[] = "Température invalide (35-42°C)";
    if($poids < 2 || $poids > 250) $errors[] = "Poids invalide (2-250 kg)";
    if($taille < 0.5 || $taille > 2.5) $errors[] = "Taille invalide (0.5-2.5 m)";
    if($tension_sys < 80 || $tension_sys > 200) $errors[] = "Tension systolique invalide (80-200)";
    if($tension_dia < 40 || $tension_dia > 130) $errors[] = "Tension diastolique invalide (40-130)";
    return $errors;
}



// Calcule l'âge en années à partir de la date de naissance donnée
function calculAge($datedenaissance){
    $birth = new DateTime($datedenaissance);
    $today = new DateTime();
    return $today->diff($birth)->y;
}



// Calcule l'IMC (Indice de Masse Corporelle) à partir du poids et de la taille
function calculIMC($poids,$taille){
    return $poids / ($taille * $taille);
}



// Vérifie les valeurs médicales et ajoute les alertes appropriées (fièvre, hypertension, sous-poids ou surpoids) dans un tableau d'alertes
function detectAlertes($temperature,$tension_sys,$tension_dia,$IMC){
    $alertes = [];
    if($temperature >= 38.5) $alertes[] = "Fièvre";
    if($tension_sys >= 140 || $tension_dia >= 90) $alertes[] = "Hypertension";
    if($IMC < 18.5) $alertes[] = "Sous-poids";
    if($IMC >= 25) $alertes[] = "Surpoids";
    return $alertes;
}



/* Elle prend la consultation sous forme de tableau, 
l'ajoute aux autres consultations existantes dans le fichier JSON, 
et enregistre le tout dans le fichier.*/
function saveConsultation($consultation){
    $file = "data/consultations.json";
    $all = [];
    if(file_exists($file)){
        $all = json_decode(file_get_contents($file),true);
    }
    $all[] = $consultation;
    file_put_contents($file,json_encode($all,JSON_PRETTY_PRINT));
}


































































?>