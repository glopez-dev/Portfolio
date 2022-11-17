<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <!-- CSS STYLE SHEETS-->
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/<?php echo $css ?>.css">
    <!-- FONT AWESOME ICONS-->
    <script src="https://kit.fontawesome.com/69c46c92d5.js" crossorigin="anonymous"></script>
    <script src="/js/dropdown.js"></script>
</head>

<body>
    <!-- BARRE DE NAVIGATION SUPERIEURE -->
    <nav class="nav-bar">
        <div class="nav-logo">
            <a href="index.php"><!--<img src="logo.png" alt="logo-console">--><h3>LOPEZ Gabriel</h3></a>
        </div>
        <div class="nav-menu">
            <div class="conteneurs-nav-menu">
                <div class="nav-menu-liens">
                    <div class="dropdown-menu">
                        <button class="drop-button" onclick="dropdownMenu()">
                            BTS SIO 
                        </button>
                        <div id="dropdown-BTS-SIO" class="dropdown-content">
                            <a href="">Lien 1</a>
                            <a href="">Lien 2</a>
                            <a href="">Lien 3</a>
                        </div>
                    </div>

                    <a class="lien-guillemets" "href="#">
                        <div class="nav-menu-liens-texte">
                            <div class="guillemets">"</div>
                              Profil 
                            <div class="guillemets">"</div>
                        </div>
                    </a>
                    <a class="lien-guillemets" href="#projets">
                        <div class="nav-menu-liens-texte">
                            <div class="guillemets">"</div>
                                Projets 
                            <div class="guillemets">"</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="conteneurs-nav-menu">
                <a href="index.php?action=contact">
                    <div class="nav-menu-contact">
                        Me contacter
                    </div>
                </a>
            </div>
        </div>
    </nav>