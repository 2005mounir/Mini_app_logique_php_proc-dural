
<?php

//applying for loop
$name = "mounir";

$age = "20";

for($i = 0 ; $i < 4 ;$i++){
   echo "...my name is $name <br>";

for($r = 0 ; $r <1 ; $r++){
   echo "...my age is $age <br>";

  };

};



for($i = 0 ; $i<=10 ; $i++){

 echo "for". " ".$i ."<br>";

};



//applying while loop


$s = 11;

while($s<=20){

echo "while"." ". $s."<br>";

$s++;
}



//applying Foreach loop

$names = ["ahmed","abdellah","ali","abdesamad"];
foreach($names as $name ){
echo "foreach .." ." ".$name ."<br>";
};




//applying break 

$cars = ["audi","bmw","mercedes","lombo","golf"];

for($l = 0 ; $l < count($cars) ; $l++){
echo "break" ." ". $cars[$l] . "<br>";
if($cars[$l] == "bmw") break;

}




$cars2 = ["audi","bmw","mercedes","lombo","golf"];

for($l = 0 ; $l < count($cars2) ; $l++){


if($cars2[$l] == "bmw") continue;
echo $cars2[$l] . "<br>";

};

?>





































