<?php
session_start();
include_once('../data_base/db.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $username = $_POST['username'];
    $email = $_POST['email'];
    $email_v = $_POST['email_v'];
    $password = $_POST['password'];
    $virf_password = $_POST['virf_password']; // Correction : ajout de ";"
    $tele = $_POST['phone'];
    $date = $_POST['date_nais'];
    $gender = $_POST['sexe'];
    $adr = $_POST['adresse'];

    // Vérification des emails
    if ($email != $email_v) {
        $message = "Les emails ne correspondent pas.";
		echo "<script type='text/javascript'> alert('$message');
                window.location.href = '../views/SignUp.php';
              </script>";
       // header("Location: ../views/SignUp.php?error=" . urlencode($message));
        exit();
    }
    
    // Vérification des mots de passe
    if ($password != $virf_password) {
        $message = "Les mots de passe ne correspondent pas.";
		echo "<script type='text/javascript'> alert('$message');
                window.location.href = '../views/SignUp.php';
              </script>";
		
      //  header("Location: ../views/SignUp.php?error=" . urlencode($message));
        exit();
    }

    $req = "INSERT INTO users (username, password, email, phone, date_nais, sexe, adresse)
            VALUES ('$username','$password','$email','$tele','$date','$gender','$adr')";

    $result = mysqli_query($conn, $req);
    if ($result) {
        $message = "Votre compte a bien été créé !";
        header("Location: ../views/Login.php");
        exit();
    } else {
        $message = "Une erreur est survenue !";
        header("Location: ../views/SignUp.php?error=" . urlencode($message)); 
        exit();
    }
}
?>
