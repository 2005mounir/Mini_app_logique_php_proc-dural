<?php

// Get

if($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['Nom'], $_GET['Email'])){
   
  
    $Nom = trim($_GET['Nom']);
    $Email = trim($_GET['Email']);
    


if( empty($Nom) || empty($Email)){
   echo 'errooor';
  }

elseif (filter_var($Email, FILTER_VALIDATE_EMAIL )===false) {

        echo 'Errooor: Invalid Email';
    }


else {
    echo 'correct';
}

}

// post

/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Nom   = trim($_POST['Nom']);
    $Email = trim($_POST['Email']);

    if (empty($Nom) || empty($Email)) {
        echo 'Erreur: khassk t3ammer kolchi';
    }
    elseif (filter_var($Email, FILTER_VALIDATE_EMAIL)===false) {
        echo 'Erreur: Email ma s7i7ch';
    }
    else {
        echo "Marhba $Nom, email dyalek howa $Email";
    }
}

*/
?>