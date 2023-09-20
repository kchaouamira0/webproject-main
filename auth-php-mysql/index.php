<?php

    include ("connexion.php");
    error_reporting(0); 
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:login.php");
      exit();
   }
   if(date("H")<18)
    $bienvenue="Bonjour et bienvenue <span>".
    $_SESSION["prenomNom"].
    "</span> </br> dans votre espace personnel ";
else
   $bienvenue="Bonsoir et Bienvenue <span>".
   $_SESSION["prenomNom"].
   "</span> </br> dans votre espace personnel";
?>

<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Walid SAAD">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SCO-ENICAR</title>
    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
    <link href="./assets/navbarindex.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
   </head>
 
   <body onLoad="document.fo.login.focus()">
    
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
        <a class="nav-link dropdown-toggle" href="index.php" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Groupes</a>        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="AfficherEtudiants.php">Lister tous les étudiants</a>
          <a class="dropdown-item" href="afficheretudiantsparclasse.php">Etudiants par Groupe</a>
          <a class="dropdown-item" href="ajouterGroupe.php">Ajouter Groupe</a>
          <a class="dropdown-item" href="modiferGroupe.php">Modifier Groupe</a>
          <a class="dropdown-item" href="supprimerGroupe.php">Supprimer Groupe</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false">Gestion des Etudiants</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="AjouterEtudiant.php">Ajouter Etudiant</a>
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

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron container_img">
    <div class="container ">
    
    <h1> <?php echo $bienvenue?> </h1>

    
     
      
   
  <br>
  
  <button  type="button"  onclick="refresh()" class="btn btn-primary btn-block active">Mes Groupes</button>
  <p id="demo">Liste vide</p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <form method="GET">
    <div class="row">
    
      <div class="col-md-4">
        
        <h2>INFO</h2>
        <div class="new_img_container">
          <img class="new_img" src="../assets/img1.jpg" alt="">
        </div>
        
        <p><input class="btn btn-secondary" name="INFO" value="Voir Les groupes" type="submit"></p>
        <table class='table table-striped'>
        <?php 
              
              if (isset($_GET["INFO"]))
              {   echo"<thead><tr><th scope='col'>Nom </th></tr></thead><tbody>";
                  $req = " SELECT * from groupe  where Nom like '%INFO%' ";
                  $res = $pdo->query($req);
                  while ($groupe = $res->fetch()){
                    echo "<tr><td>";
                    echo $groupe["Nom"];
                    echo"</td></tr>";

                  } 
               echo"</tbody>";   
              }
        ?>
        </table>
      </div>
      <div class="col-md-4">
        <h2>GSIL</h2>
        <div class="new_img_container">
          <img class="new_img" src="../assets/img2.jpg" alt="">
          
        </div>
        <p><input class="btn btn-secondary" name="GSIL" value="Voir Les groupes" type="submit"></p>
        <table class='table table-striped'>
        <?php 
              
              if (isset($_GET["GSIL"]))
              {   echo"<thead><tr><th scope='col'>Nom </th></tr></thead><tbody>";
                  $req = " SELECT * from groupe  where Nom like '%GSIL%' ";
                  $res = $pdo->query($req);
                  while ($groupe = $res->fetch()){
                    echo "<tr><td>";
                    echo $groupe["Nom"];
                    echo"</td></tr>";

                  } 
               echo"</tbody>";   
              }
        ?>
        </table>
      </div>
      <div class="col-md-4">
        <h2>INFOTRONIQUE</h2>
        <div class="new_img_container">
          <img class="new_img" src="../assets/img3.jpg" alt="">
        </div>
       
        <p><input class="btn btn-secondary" name="INFTR" value="Voir Les groupes" type="submit"></p>
        <table class='table table-striped'>
        <?php 
              
              if (isset($_GET["INFTR"]))
              {   echo"<thead><tr><th scope='col'>Nom </th></tr></thead><tbody>";
                  $req = " SELECT * from groupe  where Nom like '%INFTR%' ";
                  $res = $pdo->query($req);
                  while ($groupe = $res->fetch()){
                    echo "<tr><td>";
                    echo $groupe["Nom"];
                    echo"</td></tr>";

                  } 
               echo"</tbody>";   
              }
        ?>
        </table>
      </div>
    
    </div>
    </form>

    <hr>

  </div> <!-- /container -->

</main>


<footer class="container">
  <p>&copy; ENICAR 2021-2022</p>
</footer>
<script>
    function refresh() {
        var xmlhttp = new XMLHttpRequest();
        var url = "http://localhost/mini-projet-info/auth-php-mysql/affichergrp.php";

    //Envoie de la requete
	xmlhttp.open("GET",url,true);
	xmlhttp.send();


     //Traiter la reponse
     xmlhttp.onreadystatechange=function()
            {  // alert(this.readyState+" "+this.status);
                if(this.readyState==4 && this.status==200){
                
                    myFunction(this.responseText);
                    
                    //console.log(this.responseText);
                }
            }


    //Parse la reponse JSON
	function myFunction(response){
		var obj=JSON.parse(response);
        //alert(obj.success);

        if (obj.success==1)
        {
		var arr=obj.groupes;
		var i;
       
		var out="<table  class=' table  table-striped table-white'>";
     
      
      out+="<thead>";
      out+="<tr>";
      out+="<th> Nbre_eleves </th>";
      out+="<th> Specialité </th>";
      out+="<th> emailgrp </th>";
      out+="<th> Nom </th>";
      out+="<th> id_groupe </th>";
      out+="</tr>";
      out+="</thead>";

      out+"<tbody>";
		for ( i = 0; i < arr.length; i++) {
			out+="<tr> <th>"+
			arr[i].Nbre_eleves +
			"</th><td>"+
			arr[i].Specialité+
			"</td><td>"+
			arr[i].emailgrp+
			"</td><td>"+
			arr[i].Nom+
			"</td><td>"+
			arr[i].id_groupe+
			"</td></tr>" ;
		}
    
        out+="</tbody>";
		out +="</table>";
		document.getElementById("demo").innerHTML=out;
       }
       else document.getElementById("demo").innerHTML="Aucune Inscriptions!";

    }
    
}
</script>

   




   </body>
</html>