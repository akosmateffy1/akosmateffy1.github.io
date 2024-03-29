<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link rel="stylesheet" href="css/kapcsolat.css">
        <!--BOOSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Boxicons-->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <!--Footer boxicons-->
        <!--1. BOOSTRAP JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--Font Awesome 5 footer-->
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <title>Kapcsolat</title>
        <!--Favicon-->
        <link rel="icon" type="img/home.png" href="img/home.png">
</head>
<body>
               <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="fooldal.php"><img src="img/home.png" class="kep1" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="fooldal.php"><strong>Főoldal</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rolunk.php"><strong>Rólunk</strong></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>Sportok</strong>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="foci.php">Foci</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="uszas.php">Úszás</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="futas.php">Atlétika</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="kosar.php">Kosárlabda</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="tenisz.php">Tenisz</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="kizila.php">kézilabda</a></li>
                        </ul>
                    </li>
        
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php"><strong>Galéria</strong></a>
                    </li>
                    </ul>
                    <a href="login.php">
                        <button class="btn1 btn-outline-succes" type="submit">Bejelentkezés</button>
                    </a>

                    <a href="register.php">
                        <button  onclick="togglePopup()" class="btn2 btn-outline-succes" type="submit"> Regisztráció</button>  
                    </a>
                </div>
            </div>
        </nav>

            <main>
                <center>
                    <h1>Kapcsolat</h1>
                    <hr class="hr1">

                    <a class="click-mobile" href="tel:+36205555558" >
                        <button class="btn btn-primary"><i class='bx bx-phone'></i></button>
                    </a>
                </center>


                <div class="container">
                    <div class="tabla2"> 
                        <input class="email" type="email" name="email" id="email" placeholder="Enter your email">
                        <input class="name" type="text" name="name" id="name" placeholder=" enter your name">
                    </div>
                    <div class="tabla2">
                        
                        <textarea class="messege" name="message" id="message" cols="60" rows="10" placeholder="Enter your message here"></textarea>
                        
                    </div>
                    <div class="tabla2">
                        <input class="btn btn-success" type="submit" value="Send">
                    </div>
                </div>
            </main>
            <div class="footer-clean">
                <footer>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-4 col-md-3 item">
                                <h3>Leírás</h3>
                                <p>Számunkra a legfontosabb hogy a gyereke érezze jól magát.</p>
                            </div>
                            <div class="col-sm-4 col-md-3 item">
                                <h3>Sportolási lehetőségek</h3>
                                <ul>
                                    <li><a href="foci.php">Foci</a></li>
                                    <li><a href="uszas.php">Úszás</a></li>
                                    <li><a href="futas.php">Atlétika</a></li>
                                    <li><a href="kosar.php">Kosár</a></li>
                                    <li><a href="tenisz.php">Tenisz</a></li>
                                    <li><a href="kizila.php">Kézilabda</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-md-3 item">
                                <h3>Menük</h3>
                                <ul>
                                    <li><a href="kapcsolat.php">Kapcsolat</a></li>
                                    <li><a href="aszf.php">ÁSZF</a></li>
                                    <li><a href="galeria.php">Galéria</a></li>
                                    <li><a href="rolunk.php">Rólunk</a></li>
                                    <li><a href="fooldal.php">Főoldal</a></li>
                                    <li><a href="register.php">Regisztráció</a></li>
                                    <li><a href="login.php">belépés</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 item social">
                              <a href="#"><i class='bx bxl-facebook-circle'></i></i></a>
                              <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                              <a href="#"><i class='bx bxl-twitter' ></i></a>
                              <a href="#"><i class='bx bxl-tiktok' ></i></a>
                                <p class="copyright">Company Name © 2018</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        
</body>
</html>