<?php
session_start();
$db=mysqli_connect('localhost','root','','parfumerie');
if (!$db)  {
      die("MySQL connection failed: ". mysqli_connect_error());
     
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/58f1dd562a.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body >
  <div id="grad">
<nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Gestion des clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liste des clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gestion des commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Génération de factures</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Exportation la liste des commandes</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
<div class="form-container">
    <h1>Ajouter un client</h1>
     <form class="formulaire" action="ajoutClient.php" method="POST">
         
     <input type="text" placeholder="Nom" name="nom" required>
     <input type="text" placeholder="Prénom" name="prenom" required> 
     <input type="text" placeholder="Adresse postal" name="adpost" >
     <input type="text" placeholder="Facebook" name="fb" >
     <input type="text" placeholder="Instagram" name="insta">
     <input type="email" placeholder="Email" name="mail">
     <input type="text" placeholder="N°tel" name="tel">
     <button class="btnClient reset" type="reset"name="reset">Refaire le formulaire</button><br>
     <button class="btnClient submit" type="submit"name="submitClient"  >Ajouter</button> 
    </form>
    <?php
    if(isset($_POST['submitClient'])){
      if(!empty($_POST["nom"])&&!empty($_POST["prenom"])&&!empty($_POST["adpost"])&&!empty($_POST["fb"])&&!empty($_POST["insta"])&&!empty($_POST["mail"])&&!empty($_POST["N°tel"])){
      $nom=$_POST["nom"]; 
      $prenom=$_POST["prenom"];
      $adpost=$_POST["adpost"]; 
      $fb=$_POST["fb"];  
      $insta=$_POST["insta"]; 
      $mail=$_POST["mail"]; 
      $tel=$_POST["tel"]; 
     
      $sqlClient= "INSERT INTO client (NomClient,PrenomClient,AdressePostal,Facebook,Instagram,Email,NumTel) VALUES ('$nom','$prenom','$adpost,'$fb','$insta',$mail','$tel')";
      $resultClient=mysqli_query($db,$sqlClient);
    if ($resultClient){
      echo '<script language="javascript">';
      echo 'alert("client inséré !")';
      echo '</script>';
    }else {
    
      echo $db->error;
     
    }
    }
  }
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>