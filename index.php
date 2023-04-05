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
    <style>
        .svg-social{
            margin:0 10px;
        }
        .up_button{
            margin-bottom:20px;
            margin-right:20px;
        }
        .gallery a{
            margin: 20px;
        }   
        .gallery a img{
            align-items:center;
            padding: 10px;
            transition: 0.7s;
            border-radius:8px;
            border:solid 5px #ffc107;
        }

        .gallery a img:hover{
            filter: opacity(100%);
            filter:blur(30%)
            padding: 15px;
            transform: scale(1.1);
        }
        .notation{
            float:right;
        }
        .up_button a svg:hover{
            filter:blur(80%);
        }
        #contact_section{
            background: url(img/img05.jpg) no-repeat fixed;
        }
        #foods_section{
            background: url(img/img09.jpeg) no-repeat center fixed;
        }
    </style>
</head>
<body>

    <div class="up_button fixed-bottom d-flex justify-content-end">
        <a href="#start-card">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" color="#ffc107" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
            </svg>
        </a>
    </div>

    <!--Navigation bar-->
    <header class="header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="" class="navbar-brand" style="text-decoration: none;" disabled>
                <img src="img/favoricon.png" height="40px" width="40px" alt="Logo de la plateforme">&nbsp; <span class="fw-bold">Cuisinons KMER &nbsp;<i class="bi bi-box"></i></span>
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
                    <a href="login.php" class="btn btn-warning" role="button">Se connecter</a>
                    <a href="register.php" class="btn btn-secondary" role="button">S'inscrire</a>
                </div>
            </div>
        </div>
        </nav>
    </header>

    <!--card after the navbar-->
    <section id="start-card">
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">Cuisiner n'a jamais été aussi facile</h1>
                    <p class="lead">
                        Bienvenue dans votre espace de recettes culinaires ! Nous mettons à votre dispoition une
                        panoplie de mets africains et particulièrement camerounais.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="foods.php" class="btn btn-warning btn-lg px-4 me-md-2">Commencer &nbsp;<i class="bi bi-arrow-right-circle-fill"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3 img-fluid" src="./img/img04.jpeg" alt="" height="800px">
                </div>
            </div>
        </div>
    </section>

    <!--section that presents chef-->
    <section id="master-chef" class="container mb-5">
        <div class="title">
            <h2 class="fw-bold text-center mt-3 mb-3"> Nos meilleurs chefs</h2>
        </div>
        <div class="row mb-2">
            <!--chef card-->
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-relative">
                        <strong class="d-inline-block mb-2 text-warning"><i class="bi bi-geo"></i> Douala</strong>
                        <h3 class="mb-0">M. DONGMO XAVIER</h3>
                        <div class="mb-1 text-muted">Maison H</div>
                        <p class="card-text mb-auto fst-italic fs-6">Cuisiner, c'est l'art le plus beau et le plus complet. Il engage nos cinq sens, plus un le besoin de donner le meilleur de nous-memes.</p>
                        <p class="card-text text-center">
                            <a href="#"><img class="svg-social" src="svg/facebook-svgrepo-com.svg" alt="#" height="20px" width="20px"></a>
                            <a href="#"><img class="svg-social" src="svg/linkedin-svgrepo-com.svg" alt="#" height="20px" width="20px"></a>
                            <a href=""><img class="svg-social" src="svg/twitter-logo-shape-svgrepo-com.svg" alt="#" height="20px" width="20px"></a>
                        </p>
                    </div>
                    <div class="col-auto d-lg-block">
                        <img src="img/chef02.JPG" class="img-fluid" width="200" height="250" alt="image d'un chef de la plateforme">
                    </div>
                </div>
            </div>
            <!--chef card-->
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger"><i class="bi bi-geo"></i> Yaoundé</strong>
                        <h3 class="mb-0">M. MANUEL NIAT</h3>
                        <div class="mb-1 text-muted">Glacier moderne</div>
                        <p class="card-text mb-auto fst-italic fs-6">L'art de la cuisine, tout éphémère qu'il soit, dépasse de loin le plaisir de manger.</p>
                        <p class="card-text text-center">
                            <a href="#"><img class="svg-social" src="svg/facebook-svgrepo-com.svg" alt="#" height="20px" width="20px"></a>
                            <a href="#"><img class="svg-social" src="svg/linkedin-svgrepo-com.svg" alt="#" height="20px" width="20px"></a>
                            <a href="#"><img class="svg-social" src="svg/twitter-logo-shape-svgrepo-com.svg" alt="#" height="20px" width="20px"></a>
                        </p>
                    </div>
                    <div class="col-auto d-lg-block">
                    <img src="img/chef01.JPG" class="img-fluid" width="200" height="250" alt="image d'un chef de la plateforme">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-0">

    <!--section that presents principal foods-->
    <div id="foods_section">
        <br><br>
    <section class="container main_foods">
        <div class="title mb-3">
            <h2 class="fw-bold text-center mb-3">Nos mets africains</h2>
        </div>
        <!--search form-->
        <div class="container search-button">
            <form action="#" method="post" class="form-inline justify-content-center">
                <div class="row justify-content-center g-2">
                    <div class="col-auto form-group">
                        <select class="form-select border-warning">
                            <option value="" selected disabled>Sélectionner une catégorie</option>
                            <option>Entrées</option>
                            <option>Plats de resistance</option>
                            <option>Desserts</option>
                            <option>Boissons</option>
                            <option>Amuse-bouches</option>
                        </select>
                    </div>
                    <div class="col-auto form-group">
                        <input type="text" class="form-control border-warning" placeholder="Exemple : le pilé">
                    </div>
                    <div class="col-auto form-group">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-search"></i> Rechercher</button>
                    </div>
                </div>
            </form>
        </div>
        <!--foods-->
        <div class="row justify-content-center g-3 mt-3 container">
            <div class="col-md-4">
                <div class="card shadow">
                    <img src="img/vrai pile.jpg" class="bd-placeholder-img card-img-top" width="200px" height="200" alt="recette">
                    <div class="card-body">
                        <h5 class="card-title">Pilé pomme</h5> <p class="notation">5.0⭐</p>
                        <p class="card-text">Description :</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-warning">Consulter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                <img src="img/Ndole.jpeg" class="bd-placeholder-img card-img-top" width="200px" height="200" alt="recette">

                    <div class="card-body">
                        <h5 class="card-title">Ndolè</h5> <p class="notation">4.0⭐</p>
                        <p class="card-text">Description :</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-warning">Consulter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                <img src="img/Met de pistache.jpeg" class="bd-placeholder-img card-img-top" width="200px" height="200" alt="recette">

                    <div class="card-body">
                        <h5 class="card-title">Met de pistache</h5> <p class="notation">4.5⭐</p>
                        <p class="card-text">Description :</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-outline-warning">Consulter</a>
                    </div>
                </div>
            </div>
            <div class="more d-flex justify-content-center mt-4 mb-5">
                <a href="foods.php" class="btn btn-warning shadow">Voir plus</a>
            </div>
        </div>
    </section>
        <br><br>
    </div>

    <hr class="my-0">

    <!--section that presents food's images-->
    <section class="container specialite">
        <div class="title">
            <h2 class="fw-bold text-center mt-5 mb-3">Nos Spécialités</h2>
        </div>
        <div class="justify-content-center gallery row g-2">
            <a class="col-auto" data-title="Nom_plat" data-lightbox="mygallery" href="img/img01.jpeg"><img class="bd-placeholer-img img shadow" height="250px" width="300px" src="./img/img01.jpeg" alt="image_slide"></a>
            <a class="col-auto" data-title="Nom_plat" data-lightbox="mygallery" href="img/img02.jpeg"><img class="bd-placeholer-img img shadow" height="250px" width="300px" src="./img/img02.jpeg" alt="image_slide"></a>
            <a class="col-auto" data-title="Nom_plat" data-lightbox="mygallery" href="img/img03.jpeg"><img class="bd-placeholer-img img shadow" height="250px" width="300px" src="./img/img03.jpeg" alt="image_slide"></a>
            <a class="col-auto" data-title="Nom_plat" data-lightbox="mygallery" href="img/img04.jpeg"><img class="bd-placeholer-img img shadow" height="250px" width="300px" src="./img/img04.jpeg" alt="image_slide"></a>
            <a class="col-auto" data-title="Nom_plat" data-lightbox="mygallery" href="img/img07.jpeg"><img class="bd-placeholer-img img shadow" height="250px" width="300px" src="./img/img07.jpeg" alt="image_slide"></a>
            <a class="col-auto" data-title="Nom_plat" data-lightbox="mygallery" href="img/img08.jpeg"><img class="bd-placeholer-img img shadow" height="250px" width="300px" src="./img/img08.jpeg" alt="image_slide"></a>
            <a class="col-auto" data-title="Nom_plat" data-lightbox="mygallery" href="img/img09.jpeg"><img class="bd-placeholer-img img shadow" height="250px" width="300px" src="./img/img09.jpeg" alt="image_slide"></a>
        </div>
    </section>

    <hr class="my-0">

    <!--contact section-->
    <div id="contact_section">
    <section class="container col-xl-10 col-xxl-8 px-3 py-3">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h2 class="display-4 fw-bold mb-3">Nous contacter</h2>
                <p class="col-lg-10 lead">Pour toute assistance culinaire ou aides quelconques, écrivez nous et nous vous répondrons dans les délais</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control border border-warning" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Adresse email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea  type="text" class="form-control border border-warning" id="floatingPassword" placeholder="Password"></textarea>
                        <label for="floatingPassword">Votre message</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-secondary" type="submit"><i class="bi bi-send"></i> Envoyer</button>
                    <hr class="my-4">
                    <small class="text-muted">Nous vous demandons de bien vouloir rester courtois dans votre message , pour une potentiel réponse.</small>
                </form>
            </div>
        </div>
    </section>
    </div>

    <hr class="my-0">

    <!--footer section-->
    <footer class="footer container" id="footer">
        <div class="py-5">
            <div class="row">
              <div class="col-6 col-md-2 mb-3">
                <h5>Pour plus de conseils, consulter nos blogs</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic" active>Mon Blog</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic" active>Mon Blog</a></li>
                </ul>
              </div>
        
              <div class="col-6 col-md-2 mb-3">
                <h5>Nos Partenaires</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic">Tchop et Yamo</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic">Maison H</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic">ESIAC</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic">Foodies</a></li>
                </ul>
              </div>
        
              <div class="col-6 col-md-2 mb-3">
                <h5>Cuisinons KMER</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic">Douala, Cameroun</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic">Logbaba</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic">+237 674 315 131</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted fst-italic">cuisinonskmer@gmail.com</a></li>
                </ul>
              </div>
        
              <div class="col-md-5 offset-md-1 mb-3">
                <form>
                  <h5>Souscrivez à notre Newsletter</h5>
                  <p>Entrez votre adresse E-mail pour recevoir des offres pour ainsi en profiter à temps !</p>
                  <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <input id="newsletter1" type="text" class="form-control border-warning" placeholder="Entrer votre adresse Email" required="required">
                    &nbsp;
                    <button class="btn btn-warning" type="button"><i class="bi bi-envelope-check"></i> Souscrire</button>
                  </div>
                </form>
              </div>
            </div>
        
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
              <p>&copy; 2023 Manuel Niat Inc. All rights reserved.</p>
              <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="nav-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="orange" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg></a></li>
                <li class="ms-3"><a class="nav-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="orange" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg></a></li>
                <li class="ms-3"><a class="nav-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="orange" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                  </svg></a></li>
              </ul>
            </div>
        </div>
    </footer>

</body>
</html>