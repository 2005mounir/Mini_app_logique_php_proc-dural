<?php


// une fonction simple

function names(){

    $name = 'mounir maimouni';
    $age = 20;
    echo 'my name is' .' '. $name.' '. 'and I am ' .' '. $age .' '. 'years old . <br> ';
}
names();


 

//Fonction avec argument et valeur de retour


function numbres($num1,$num2){

    $somme = $num1 + $num2;
    return $somme;

}
echo 'somme :'.' '. numbres(10,20).'<br>';




//Paramètre par défaut function

function student($name='student'){

    echo 'Hi'.' '. $name .'<br>';

}
student();





//Tester la portée des variables

function visiteurs() {
    static $nb=0;
    $nb++;
    echo "Nombre de visiteurs : " . $nb . "<br>";
}

visiteurs() .'<br>'; 
visiteurs() .'<br>'; 
visiteurs() .'<br>'; 
visiteurs() .'<br>';














?>