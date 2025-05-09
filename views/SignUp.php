<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

  <!-- Header section -->
    <header class="header">
        <?php include '../views/header.php'; ?>
    </header>
	
	
	
    <div class="container mt-5">
        <h1 class="text-center">S'inscrire : </h1>
        <form action="../php/verif_S.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
			
			 <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="email_v" class="form-label">Verify Email</label>
                <input type="email" class="form-control" id="email_v" name="email_v" required>
            </div>
			
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="virf_password" class="form-label">Verify Password</label>
                <input type="password" class="form-control" id="virf_password" name="virf_password" required>
            </div>
           
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="date_nais" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="date_nais" name="date_nais" required>
            </div>
            <div class="mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <select class="form-select" id="sexe" name="sexe" required>
                    <option value="M">Masculin</option>
                    <option value="F">Féminin</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
            <div class="d-grid mt-2">
                <button type="reset" class="btn btn-secondary">Effacer</button>
            </div>
        </form>
    </div>
</body>
</html>
