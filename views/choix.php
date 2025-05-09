
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	


  <!-- Header section -->
    <header class="header">
        <?php include '../views/header.php'; ?>
    </header>
	
	
</head>

<body>

	
    <h2 class="mt-5" align="center">Liste détaillée des services construction avec un matériel de bonne qualité,  rénovation et génie civil : </h2>




<p align="right"><a href="../views/home.php">déconnexion</a></p> 


<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom de Service</th>
      <th scope="col">Discreption</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Construction</td>
      <td>Prise en charge de tous les aspects, de la fondation à la finition, en livrant un bâtiment prêt à l'utilisation.</td>
      <td>  <a href="../php/ajouter.php?choix=Construction">Ajouter au panier</a>   </</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Rénovation</td>
      <td>Nous offrons des services de rénovation pour moderniser et améliorer les bâtiments existants :
Rénovation intérieure ; Rénovation extérieure ; Rénovation énergétique : Mise à niveau des systèmes de chauffage, d'isolation et d'électricité pour améliorer l'efficacité énergétique.
</td>
      <td><a href="../php/ajouter.php?choix=Rénovation">Ajouter au panier</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Aménagement Urbain</td>
      <td>Nous contribuons à la création d'espaces publics fonctionnels et esthétiques</td>
	   <td><a href="../php/ajouter.php?choix=Aménagement_Urbain">Ajouter au panier</a></td>
    </tr>
	<tr>
      <th scope="row">4</th>
      <td>Maintenance et Réparation</td>
      <td>Nous assurons la pérennité et la sécurité des infrastructures: Maintenance préventive, Réparations, Rénovation structurelle.</td>
      <td><a href="../php/ajouter.php?choix=Maintenance_Réparation">Ajouter au panier</a></td>
	</tr>
	  <th scope="row">5</th>
      <td>Éco-construction</td>
      <td>Nous intégrons des pratiques durables et respectueuses de l'environnement dans nos projets: Bâtiments à haute performance énergétique, Gestion des déchets, Energies renouvelables  </td>
      <td><a href="../php/ajouter.php?choix=Éco_construction">Ajouter au panier</a></td>    
	</tr>
  </tbody>
</table>

<p align="center">Votre panier est composé de : 

<?php 

session_start();
include_once("../data_base/db.php"); 
		$req = "SELECT * FROM services";
		$result = mysqli_query($conn, $req);
		
		while($row = mysqli_fetch_assoc($result)){
			echo $row['Nom'].", ";
		}
 
 ?> 
 
 </p> 

</body>
</html>

