<?php


// Function verifierNotes

function verifierNotes($notes){
foreach($notes as $note){
if($note==='' || $note <0 || $note > 20 || !is_numeric($note)){
  return false;
    
};
}};




//function calculerMoyenneGenerale


function calculerMoyenneGenerale() {

// Access global grade variables from the form for calculations

 global $mathnote1, $mathnote2,
           $phiziknote1, $phiziknote2,
           $svtnote1, $svtnote2,
           $englainote1, $englainote2,
           $philonote1, $philonote2,
           $regional, $national,$notes;



$mathsomme = ((float)$mathnote1 + (float)$mathnote2)/2;

$phiziquesomme = ((float)$phiziknote1 + (float)$phiziknote2)/2 ;

$svtsomme = ((float)$svtnote1 + (float)$svtnote2)/2;

$englaisomme = ((float)$englainote1 + (float)$englainote2)/2;

$philosomme = ((float)$philonote1 + (float)$philonote2)/2;

$regionalsomme = (float)$regional*0.25;

$nationalsomme = (float)$national*0.50;

$allnotes1 = $mathsomme+$phiziquesomme+
$svtsomme+$englaisomme+$philosomme;

$MoyenneGénérale= ($mathsomme+$phiziquesomme+
$svtsomme+$englaisomme+$philosomme+
$regionalsomme+$nationalsomme)/7;

 
echo '<h1>Information academiques</h1>'.'<br>';
echo ' Score total en math:' .' '.$mathsomme.'<br>'.'<br>';
echo ' Score total en phiyique:'.' '.$phiziquesomme .'<br>'.'<br>';
echo ' score totale en svt:'.' '.$svtsomme .'<br>'.'<br>';
echo 'score Total en Englais :'.' '.$englaisomme .'<br>'.'<br>';
echo 'score Total en Philo : '.' '.$philosomme .'<br>'.'<br>';
echo 'Note de l examen regionel multipliee par 0.5 :' .' '. $regionalsomme.'<br>'.'<br>';
echo  'note de l exmen national multipliee par 0.50 :' .' '.$nationalsomme.'<br>'.'<br>';
echo  ' Moyenne de Semestre :'.' '. $allnotes1/5 .'<br>'.'<br>';
echo 'Moyenne Générale : '.' '. $MoyenneGénérale .'<br>'.'<br>';

  return $MoyenneGénérale;
};



//unction getMention


function getMention($moyenne){
if($moyenne>=15 && $moyenne<=20){
  echo 'Mention : tres bien'.'<br>'; 
}
elseif($moyenne >=12 && $moyenne <15){
    echo 'Mention : bien'.'<br>';
}
elseif($moyenne >= 10 && $moyenne < 12){
echo 'Mention : Passable'.'<br>';
}
else{
   echo 'Mention : ajourne'.'<br>';
}
};



//function decisionFinale

function decisionFinale($moyenne){
if($moyenne >=10){
   echo ' <h3>Admis </h3>';
   echo '<p>Bravo, travailleur acharne ! Nous te souhaitons bonne chance et succes .</p>'.'<br>';

}
else{
   echo ' <h3>Redoube l annee</h3>';
   echo '<p>Nous te souhaitons bonne chance pour l annee prochaine. travaille dur. </p>';
}

}

?>