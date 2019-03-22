<?php

$pdo = new PDO('mysql:host=localhost;dbname=abonnes','root','',array(

    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));

if(isset($_POST["email"])){
    $login = $_POST["email"];
    $psd = $_POST["psd"];
    $result = $pdo->prepare("SELECT id_identification From identification WHERE email=? AND  psd =?");
    $result->execute(array($login,  $psd));
    
     $valeur = $result -> fetch();
    // echo "mail :". $valeur['email'].'</br>';
     //echo "psd :". $valeur['psd'].'</br>';
    // echo "le nombre de resultat possible". $result -> rowCount().'</br>';
     $id_identification = $valeur["id_identification"];
     if($result->rowCount() >= 1){
         //echo "connexion reussi";
        
         header("Location: article.php?id_identification=".$id_identification);
         exit();
     }
      
     
    //$pdo -> query("INSERT INTO  rubrique(culture_pop,sport, cuisine, actualite, mode,tuning) values ()"); 
    
   
   /*
    if ($compare["email"] ==$login AND $compare["psd"] == $psd){

                echo "bonjour";
    }else{
        echo "erreur";
    }*/
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Page index  to see it in a GIT </h1>
<<<<<<< HEAD
    <h2>HELLLLLLOOOOO</h2>
=======
    <p> le git dont work :) </p>
>>>>>>> 3e587544e8d993e96397b576ed057ae00b35dddf

    <form action="index.php" method="post">

        <input type="text" name="email"> 
         <input type="text" name="psd"> 
      
        <button type="submit" name="valider">valider</button>
    
    </form>
</body>
</html>
