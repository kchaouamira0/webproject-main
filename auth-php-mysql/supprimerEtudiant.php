<?php 
include "connexion2.php";
if (isset($_POST["confirmation"]))
{
    $cin=$_POST['cin'];
    $query="DELETE FROM etudiant WHERE cin='$cin' ";
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Supprimer Etudiant</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap core JS-JQUERY -->
    <script src="./assets/dist/js/jquery.min.js"></script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet" />
    <link href="./assets/navbarindex.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark new_nav">
    <a class="navbar-brand" href="index.php"><img class ="new_logo"src="../assets/enicar.jpg" alt=""></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="index.php"
              id="dropdown01"
              data-toggle="dropdown"
              aria-expanded="false"
              >Gestion des Groupes</a
            >
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="AfficherEtudiants.php"
                >Lister tous les étudiants</a
              >
              <a class="dropdown-item" href="afficherEtudiantsParClasse.php"
                >Etudiants par Groupe</a
              >
              <a class="dropdown-item" href="ajouterGroupe.php"
                >Ajouter Groupe</a
              >
              <a class="dropdown-item" href="modifierGroupe.php">Modifier Groupe</a>
              <a class="dropdown-item" href="supprimerGroupe.php">Supprimer Groupe</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="dropdown01"
              data-toggle="dropdown"
              aria-expanded="false"
              >Gestion des Etudiants</a
            >
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="AjouterEtudiant.php"
                >Ajouter Etudiant</a
              >
              <a class="dropdown-item" href="chercherEtudiant.php">Chercher Etudiant</a>
              <a class="dropdown-item" href="modifierEtudiant.php">Modifier Etudiant</a>
              <a class="dropdown-item" href="supprimerEtudiant.php">Supprimer Etudiant</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="dropdown01"
              data-toggle="dropdown"
              aria-expanded="false"
              >Gestion des Absences</a
            >
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="saisirAbsence.php"
                >Saisir Absence</a
              >
              <a class="dropdown-item" href="etatAbsence.php"
                >État des absences pour un groupe</a
              >
            </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="login.php"
              >Se Déconnecter <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main role="main">
      <div class="jumbotron">
        <div class="container">
         
            <h1 class="display-4">Supprimer un etudiant</h1>
        </div>
      </div>

      <div class="container">
      <form method="POST"  action="supprimerEtudiant.php">
          <!--
                            TODO: Add form inputs
                            Prenom - required string with autofocus
                            Nom - required string
                            Email - required email address
                            CIN - 8 chiffres
                            Password - required password string, au moins 8 letters et chiffres
                            ConfirmPassword
                            Classe - Commence par la chaine INFO, un chiffre de 1 a 3, un - et une lettre MAJ de A à E
                            Adresse - required string
                        -->
          <!--CIN-->
          <div class="form-group">
            <label for="cin">CIN d'edtudiant à Supprimer :</label><br />
            <input
              type="text"
              id="cin"
              name="cin"
              class="form-control"
              required
              autofocus
            />
          </div>

    

          <!--Bouton Ajouter-->
          <input type="submit"  class="btn btn-primary btn-block" name="confirmation"></button>
        </form>
      </div>
    </main>

    <footer class="container">
      <p>&copy; ENICAR 2021-2022</p>
    </footer>
  </body>
</html>