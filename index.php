<?php 
try{
    $database = new PDO('mysql:host=localhost; dbname=store', 'root', '', );
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
    die('Error :' .$e->getMessage());
}
// fonction query
// $results = $database->query ('SELECT first_name, last_name FROM customers');
// while($row = $results->fetch()){
//     echo " je m'appelle " .$row ['first_name']. " ". $row['last_name'] .'<br>';
// }

// fonction prepare et execute
$firstname="malakoff";
$lastname="vancouver";
$sql = $database->prepare('INSERT INTO customers(first_name, last_name) VALUES (:first_name, :last_name,)');

$array = array
('first_name' => $firstname,
 'last_name' => $lastname
 );
$sql->execute($array);
?>





<?php 
    // $nom = $_POST['nom'];
    // $prenom = $_POST['prenom'];
    // $email = $_POST['email'];
    // $telephone = $_POST['telephone'];
    // $ligue = $_POST['ligue'];
    // $formation = $_POST['formation'];
    // $campus = $_POST['campus'];
    // $niveau = $_POST['niveau'];
    
    
    // $requete=$bdd->prepare('SELECT * FROM etudiant where email = ?');
    // $requete->execute(array($email));
    // if (!$resultat = $requete->fetch()){
  
    // $requete2=$bdd->prepare('INSERT INTO etudiant (nom, prenom, email, telephone, ligue, formation, campus, niveau) 
    // VALUES (:nom, :prenom, :email, :telephone, :ligue, :formation, :campus, :niveau)');

    // $array = array(
    //   'nom' => $nom,
    //   'prenom' => $prenom,
    //   'email' => $email,
    //   'telephone' => $telephone,
    //   'ligue' => $ligue,
    //   'formation' => $formation,
    //   'campus' => $campus,
    //   'niveau' => $niveau
    // );
    // $requete2->execute($array);

    // echo '<script language="Javascript">
    // document.location.replace("/template/data.html");
    // </script>';

    // }
    // else {
    //   echo '<script language="Javascript">
    //   document.location.replace("/template/index.html");
    //   </script>';
    //   }
  ?>