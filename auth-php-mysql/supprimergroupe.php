<?php 
include "connexion2.php";
if (isset($_POST["confirmation"]))
{
    $nomgrp=$_POST['nomgrp'];
    $query="DELETE FROM groupe WHERE nom='$nomgrp' ";
   $data=mysqli_query($conn,$query);
   if ($data)
   {
     echo"<font color='green'> student deleted ";
   }
    else
    {
      echo "<font color='red'> failed to delete student";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supprimerGroupe</title>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
    <link href="./assets/navbarindex.css" rel="stylesheet">
</head>


<style>
    
</style>

<body>
<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark new_nav">
<a class="navbar-brand" href="index.php"><img class ="new_logo"src="../assets/enicar.jpg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="index.php" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Groupes</a>              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="AfficherEtudiants.php">Lister tous les étudiants</a>
                <a class="dropdown-item" href="afficheretudiantsparclasse.php">Etudiants par Groupe</a>
                <a class="dropdown-item" href="ajouterGroupe.php">Ajouter Groupe</a>
                <a class="dropdown-item" href="modifiergroupe.php">Modifier Groupe</a>
                <a class="dropdown-item" href="supprimergroupe.php">Supprimer Groupe</a>
      
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Etudiants</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="ajouterEtudiant.php">Ajouter Etudiant</a>
                <a class="dropdown-item" href="chercherEtudiant.php">Chercher Etudiant</a>
                <a class="dropdown-item" href="modifierEtudiant.php">Modifier Etudiant</a>
                <a class="dropdown-item" href="supprimerEtudiant.php">Supprimer Etudiant</a>
      
      
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Absences</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="saisirAbsence.php">Saisir Absence</a>
                <a class="dropdown-item" href="etatAbsence.php">État des absences pour un groupe</a>
              </div>
            </li>
      
            <li class="nav-item active">
              <a class="nav-link" href="deconnexion.php">Se Déconnecter <span class="sr-only">(current)</span></a>
            </li>
      
          </ul>
        
      
        </div>
      </nav>

      <div class="jumbotron">
            <div class="container">
              <h1 class="display-4">Supprimer un groupe</h1>
              <p>Remplir le formulaire ci-dessous afin de supprimer un groupe</p>
            </div>
          </div>
          <div class="container">
   
    <h2>Nom du groupe à supprimer : </h2>
    <form method="POST"  action="supprimergroupe.php">

    <input type="text" id="nomgrp" name="nomgrp" class="form-control" >
    <input type="submit"  class="btn btn-primary btn-block" name="confirmation"></button>
    </form>
    <div class="container"> </div>
          </div>
    
</body>
</html>