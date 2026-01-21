<?php

$result = 11;
if($result>10){
 echo 'tu as réussi . <br>';
} 
else{
    echo 'Tu as échoué . <br>';
}



$domande = 15;
if($domande<10){
echo "demande simple . <br>";
}
elseif($domande>10){
echo "Cest une bonne demande.<br>";
}
else{
echo "l ny a pas de demande . <br>";
}



$age = 16;
$echoage = ($age<18)? "Vous êtes mineur." : "Vous êtes majeur";
echo $echoage ."<br>";



$date = 2022;
switch($date){
 case 2023 : var_dump('Ce n est pas cette année .<br>');
 break;
 case 2021 : var_dump('Après le coronavirus .<br>');
 break;
 default : var_dump('C’est cette année .<br>');
}


?>