<?php
session_start();
include_once("../data_base/db.php"); 

if (isset($_GET['choix'])) {
	$choix=$_GET['choix'];
	if($choix=="Construction"){
		$req = "INSERT INTO services (nom) VALUES ('$choix')";
		$result = mysqli_query($conn, $req);
		
		$message = "Votre demande a bien été créé !";
		echo "<script type='text/javascript'> alert('$message');
                window.location.href = '../views/choix.php';
              </script>";
	$_SESSION["nom"]=$choix;

	}
	if($choix=="Rénovation"){
		$req = "INSERT INTO services (nom) VALUES ('$choix')";
		$result = mysqli_query($conn, $req);
		$message = "Votre demande a bien été créé !";
		echo "<script type='text/javascript'> alert('$message');
                window.location.href = '../views/choix.php';
              </script>";
		 	$S_SESSION["nom"]=$choix;
	}
	if($choix=="Aménagement_Urbain"){
		$req = "INSERT INTO services (nom) VALUES ('$choix')";
		$result = mysqli_query($conn, $req);
		$message = "Votre demande a bien été créé !";
		echo "<script type='text/javascript'> alert('$message');
                window.location.href = '../views/choix.php';
              </script>";
		 	$_SESSION["nom"]=$choix;
	}
	if($choix=="Maintenance_Réparation"){
		$req = "INSERT INTO services (nom) VALUES ('$choix')";
		$result = mysqli_query($conn, $req);
		$message = "Votre demande a bien été créé !";
		echo "<script type='text/javascript'> alert('$message');
                window.location.href = '../views/choix.php';
              </script>";
		 	$_SESSION["nom"]=$choix;
	}
	
	if($choix=="Éco_constructio"){
		
		$req = "INSERT INTO services (nom) VALUES ('$choix')";
		$result = mysqli_query($conn, $req);
		
		$message = "Votre demande a bien été créé !";
		echo "<script type='text/javascript'> alert('$message');
                window.location.href = '../views/choix.php';
              </script>";
		 	$_SESSION["nom"]=$choix;
	}
	
  
}
?>