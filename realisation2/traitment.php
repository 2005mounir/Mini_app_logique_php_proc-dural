

<?php

require_once 'fonctions.php';



if($_SERVER['REQUEST_METHOD']==='POST'){


//Récupération des données du formulaire et vérification de leur existence.
$nom = isset($_POST['nom']) ? trim($_POST['nom']) :"";
$prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) :"";
$datedenaissance = isset($_POST['datedenaissonce']) ? trim($_POST['datedenaissonce']) :"";
$select = isset($_POST['select']) ? trim($_POST['select']) : "";
$Ntelephone = isset($_POST['Ntelephone']) ? trim($_POST['Ntelephone']) : "";
$Dt_consultation = isset($_POST['Dt_consultation']) ? trim($_POST['Dt_consultation']) :"";


//Récupération des informations du formulaire
$temperature = isset($_POST['temperature']) ? trim($_POST['temperature']) :"";
$tension_sys = isset($_POST['tension_sys']) ? trim($_POST['tension_sys']) :"";
$tension_dia = isset($_POST['tension_dia']) ? trim($_POST['tension_dia']) : "";
$poids = isset($_POST['poids']) ? trim($_POST['poids']) :"";
$taille = isset($_POST['taille']) ? trim($_POST['taille']) : "";



//→ On vérifie si l’utilisateur a sélectionné des cases à cocher pour les "symptômes" et que le tableau n’est pas vide.
if(isset($_POST['symptomes']) && !empty($_POST['symptomes'])){
   $Symptômes = $_POST['symptomes'];

foreach($Symptômes as $key => $value){
   $Symptômes[$key] = trim($value);
 }
}
else{
    $Symptômes=[];
};



// Vérifie les informations du patient, et si des erreurs existent, les affiche et arrête l'exécution
$errors = validatePatient($nom,$prenom,$datedenaissance,$select,$Ntelephone,$Dt_consultation);
if(!empty($errors)){
    foreach($errors as $error) echo "<p style='color:red;'>$error</p>";
    exit;
}




// Vérifie les valeurs de la consultation, ajoute les erreurs au tableau, et stoppe si nécessaire
$errors = array_merge($errors, validateConsultation($temperature,$poids,$taille,$tension_sys,$tension_dia));
if(!empty($errors)){
    foreach($errors as $e) echo "<p style='color:red;'>$e</p>";
    exit;
}




// Calcule l'âge du patient et son IMC
$age = calculAge($datedenaissance);
$IMC = calculIMC($poids,$taille);


// Détecte les alertes médicales (fièvre, hypertension, sous-poids, surpoids)
$alertes = detectAlertes($temperature,$tension_sys,$tension_dia,$IMC);


// Prépare un tableau associatif pour stocker toutes les informations du patient et de la consultation
$consultation = [
    "id" => "PAT-".rand(1000,9999),
    "patient" => [
        "nom"=>$nom,
        "prenom"=>$prenom,
        "datedenaissance"=>$datedenaissance,
        "sexe"=>$select,
        "telephone"=>$Ntelephone,
        "age"=>$age
    ],
    "consultation"=>[
        "date"=>$Dt_consultation,
        "temperature"=>$temperature,
        "tension_sys"=>$tension_sys,
        "tension_dia"=>$tension_dia,
        "poids"=>$poids,
        "taille"=>$taille,
        "IMC"=>$IMC,
        "symptomes"=>$Symptômes,
        "alertes"=>$alertes
    ]
];


// Enregistre la consultation dans le fichier JSON puis redirige vers la page index avec un message de succès

saveConsultation($consultation);

header("Location: index.php?success=1");
exit();



}

