<?php
require_once 'fonctions.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){


// On récupère les données du formulaire et on supprime les espaces inutiles

$nom = isset($_POST['nom'])? trim($_POST['nom']) :"";
$prenom = isset($_POST['prenom'])? trim($_POST['prenom']) :"";
$date = isset($_POST['date'])? trim($_POST['date']) :"";
$filiere=isset($_POST['filiere'])? trim($_POST['filiere']) : "";
$nomecole = isset($_POST['ecole'])? trim($_POST['ecole']) : "";
$classe = isset($_POST['classe'])? trim($_POST['classe']) : "";
$Nsalle = isset($_POST['Nsalle'])? trim($_POST['Nsalle']) : "";


// On vérifie si un champ est vide

if(empty($nom) || empty($prenom) || empty($date) || empty($filiere) || empty($nomecole) || empty($classe)||  empty($Nsalle)){
    echo 'imla2 jamii3 lkhanat' .'<br>';
}
else{
    echo '<h2> informations personnelles</h2>'. '<br>' ;
    echo 'le nom :' .' '.$nom .'<br>'.'<br>'; 
    echo 'le prenom :'.' '.$prenom.'<br>'.'<br>';
    echo 'Date de nissance :'.' '.$date.'<br>'.'<br>';
    echo 'Filiere :'.' '.$filiere.'<br>'.'<br>';
    echo 'Nom de l ecole :'.' '.$nomecole.'<br>'.'<br>';
    echo 'Nom de classe : '.' '.$classe.'<br>'.'<br>';
    echo 'Numero de salle dexamen naional :'.' '.$Nsalle.'<br>'.'<br>';

}


// note de math
$mathnote1 = isset($_POST['math1']) ? trim($_POST['math1']) : "";
$mathnote2 = isset($_POST['math2']) ? trim($_POST['math2']) : "";


// note de phizik
$phiziknote1 = isset($_POST['pc1']) ? trim($_POST['pc1']) : "";
$phiziknote2 = isset($_POST['pc2']) ? trim($_POST['pc2']) : "";


// note de svt
$svtnote1 = isset($_POST['svt1']) ? trim($_POST['svt1']) : "";
$svtnote2 = isset($_POST['svt2']) ? trim($_POST['svt2']) : "";


// note de englais 
$englainote1 = isset($_POST['englai1']) ? trim($_POST['englai1']) : "";
$englainote2 = isset($_POST['englai2']) ? trim($_POST['englai2']) : "";


//note de philosophie
$philonote1 = isset($_POST['philo1']) ? trim($_POST['philo1']) : "";
$philonote2 = isset($_POST['philo2']) ? trim($_POST['philo2']) : "";


//note de regional
$regional = isset($_POST['regional']) ? trim($_POST['regional']) : "";


// note de national
$national = isset($_POST['national']) ? trim($_POST['national']) : '';



// On vérifie si un champ est vide

$notes =[
    $mathnote1 , $mathnote2 ,
    $phiziknote1 , $philonote2 ,
    $svtnote1 , $svtnote2 ,
    $englainote1 , $englainote2 ,
    $philonote1 , $philonote2 ,
    $regional , $national

    ];




if(verifierNotes($notes)){
    echo 'You have an error in your notes';

};
    


$moyenne = calculerMoyenneGenerale();

    getMention($moyenne);

    decisionFinale($moyenne);

}

?>