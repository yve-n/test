<?php 
$sexe = "";
if($sexe =='F'){
    echo "Vous etes une femme";
}elseif($sexe == "H"){
    echo "Vous etes un homme";
}
else {
    echo "faites un cchoix";
}

$budget = 1553.89;
$achats = 1554.76;
if($budget >= $achats){
    echo "vous pouvez faire des achats";
}else{
    echo" augmentez votre budget";
}

$age = 21;
if($age >= 21){
    echo" vous etes majeures ";
}else{
    echo "vous etes encore mineure donc patientez";
}

$heure= 24;
if ($heure < 0 || $heure >23){
    echo "ce n'est pas compris";
}
elseif($heure >=6 && $heure < 12){
    echo "c'est le matin";
}elseif($heure > 12 && $heure <20){
    echo " bonsoir";
}else{
    echo "allez dormir";
}
$animals = array("dog => ", "cat", 'mouse', "snake");

foreach ($animals as $animal ) {
    echo "$animal <br>";
}




?>