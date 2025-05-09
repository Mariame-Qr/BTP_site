
<?php
 session_start();
 include_once "../data_base/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Requête pour vérifier l'utilisateur dans la base de données
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            $users = mysqli_fetch_assoc($result);
          
			
            if ($password== $users['password']) {
                
                $_SESSION['username'] = $users['username'];
             
                header("Location: ../views/choix.php");
                exit;
            } else {
                // Mot de passe incorrect
				 
				$message = "Utilisateur non trouvé ou bien Mot de passe incorrect.";
		        echo "<script type='text/javascript'> alert('$message');
                              window.location.href = '../views/Login.php';
                       </script>";
		
                //header("Location: ../views/Login.php");
                exit;
            }
        } else {
            // Utilisateur non trouvé ou Mot de passe incorrect
			 $message = "Utilisateur non trouvé ou bien Mot de passe incorrect..";
			echo "<script type='text/javascript'> alert('$message');
					window.location.href = '../views/Login.php';
			      </script>";
		
          //  header("Location: ../views/Login.php");
            exit;
        }
    } else {
        // Champ email ou mot de passe vide
	
		
        //header("Location: ../views/Login.php");
        exit;
    }
}
?>
