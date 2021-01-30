<?php
  $db=mysqli_connect('localhost','root','');
  if(mysqli_connect_errno()) {
      die("MySQL connection failed: ". mysqli_connect_error());
     
  }
$selectdb=mysqli_select_db($db,"parfumerie");
$clientsquery= "SELECT * FROM `client`";
 $clients=mysqli_query($db,$clientsquery);

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
<body style="background-color: rgb(245, 232, 212);">
<nav class="navbar navbar-expand-lg navbar-light  ">
  <div class="container-fluid">
    <h1 class="navbar-brand">Dashboard</h1 >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="d-flex align-items-start changement">

  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
     <img class="logo" src="logo.png" alt="logo" width="270 px" >
     <div class="trait"> </div>
    <a class="nav-link active"  ><i class="fas fa-clipboard-list"  style="margin-right: 9px;"></i>Liste des clients</a>
    <a class="nav-link"  href="ajoutClient.php"><i class="fas fa-address-book"style="margin-right: 9px;"></i>Gestion des clients</a>
    <a class="nav-link"  href="" ><i class="fas fa-cart-plus"style="margin-right: 9px;"></i>Gestion des commandes</a>
    <a class="nav-link"  href="" ><i class="fas fa-tasks"style="margin-right: 9px;"></i>Génération de factures</a>
    <a class="nav-link"  href=""><i class="fas fa-download"style="margin-right: 9px;"></i>Exportation liste de commandes</a>
  </div>
  
</div>
<?php while ($row=mysqli_fetch_array($clients)){
            echo '<p>'. $row["PrenomClient"].'<p/>';
            echo '<p>'. $row["NomClient"].'<p/>';
            echo '<p>'. $row["Email"].'<p/>'; }
            
            
            ?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


<!-- <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Liste des clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ajoutClient.php">Gestion des clients</a>
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
    
    </div> -->