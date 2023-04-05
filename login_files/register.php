
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favoricon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Inscription</title>
    <style>
        #login_form{
            width:400px;
        }
        body{
            margin-top:100px;
        }
    </style>
</head>
<body>
    <form action="models/save_user.php" method="POST" class="container p-3 mt-0 p-md-4 border rounded-3 bg-light" id="login_form">
        <div class="login-picture d-flex justify-content-center mt-5">
            <img src="img/coffee.png" alt="Logo de la page de connexion">
        </div>
        <div class="title">
            <h2 class="text-center">
                Inscrivez-vous 
            </h2>
        </div>
        <div class="form-floating">
            <input type="email" class="mb-3 form-control border-warning" id="floatingInput" name="email" placeholder="name@example.com" required>
            <label for="floatingInput">Adresse Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="mb-3 form-control border-warning" id="floatingPassword" name="password" placeholder="Password" required>
            <label for="floatingPassword">Mot de passe</label>
        </div>
        <div class="form-floating">
            <input type="password" class="mb-3 form-control border-warning" id="floatingPassword" name="confpass" placeholder="Password" required>
            <label for="floatingPassword">Confirmer le mot de passe</label>
        </div>

        <div class="checkbox mb-3 d-flex justify-content-center">
            <p class="text-muted">Si vous possédez déjà un compte,<a href="login.php" class="text-underlined">Cliquez ici</a></p>
        </div>
        <div class="validation d-flex justify-content-center">
            <button class="btn btn-lg btn-warning w-50" type="submit">S'inscrire</button>
        </div>
        
  </form>

  <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>