<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favoricon.png" type="image/x-icon">
    <!--Bootstrap css-icons files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!--Bootstrap js files-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <!--Bootstrap css files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <title>Accueil</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top shadow container-fluid">
        <div class="container-fluid">
            <a href="" class="navbar-brand" style="text-decoration: none;" disabled>
                <img src="./img/favoricon.png" height="40px" width="40px" alt="Logo de la plateforme"><span class="fw-bold"> Cuisinons KMER &nbsp;<i class="bi bi-box"></i></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_link" aria-controls="collapse_link" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse_link">
                <div class="navlink navbar-collapse justify-content-md-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#"><i class="bi bi-house"></i>  Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#speciality"><i class="bi bi-card-checklist"></i>  Spécialités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#footer"><i class="bi bi-telephone"></i>  Nous contacter</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="true"><i class="bi bi-info-circle"></i>  A propos</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="#">Nous contacter</a></li>
                                <hr class="my-0">
                                <li><a class="dropdown-item" href="#">About us</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="float-right">
                    <div class="navbutton">
                        <a href="dashboard.php">
                            <button type="button" class="btn btn-warning position-relative" style="margin-right:15px; margin-top: 5px;">
                                <i class="bi bi-person-circle"></i> Profile
                                <span class="position-absolute top-0 start-100 rounded-1 translate-middle bg-danger">
                                    <span class="badge bg-danger">5</span>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </header>
</body>
</html>