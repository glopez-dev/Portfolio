<?php
    $title = "Accueil";
    $css = "accueil";
    ob_start();
?>
    <!-- CONTENU -->
<div class="content">
        <!-- BLOC D'INTRODUCTION -->
    <div class="intro">
        <div class="intro-message">
            <div class="intro-bienvenu">
                <p>Bienvenue dans mon Portfolio</p>
            </div>
            <div class="intro-titre">
                <h1>Enchanté !</h1>
            </div>
            <div class="intro-texte">
            <p>
                Je suis un étudiant de 2eme année de BTS Service Informatique aux Organisations (SIO) option Solution Logicielles et Applications Métier (SLAM). 
                <br/>Passionné par la programmation et l'informatique en général, ce portfolio à pour objectif de vous présenter mes compétences actuelles, mon parcours professionnnel,
                les travaux que j'ai réalisés à titre personnel et au cours de ma formation.<br/><br/>
                <em>Bonne visite !</em>
            </p> 
            </div>
        </div>
        <div class="intro-img">
            <!--<img src="Message.png" alt="bulle textuelle en 3D">-->
        </div>
    </div>
    <!-- PROJETS -->
    <div class="projets" id="projets">
        <div class="projets-head">
            <div class="projets-titre">
                Mes projets
            </div>
            <div class="projets-sous-titre">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, mollitia, 
                sequi incidunt excepturi vitae necessitatibus aut voluptas officiis esse minima 
                eius quidem quod ratione error iusto labore non ipsam reiciendis!  
            </div>
        </div>
        <div class="projets-contenu">
            <div class="projet1">
                <div class="projet-img">
                    <img>
                </div>
                <div class="projet-legende">
                    Lorem ipsum dolor sit amet consectetur 
                </div>
            </div>
            <div class="projet2">
                <div class="projet-img">
                    <img>
                </div>
                <div class="projet-legende">
                    Lorem ipsum dolor sit amet consectetur 
                </div>
            </div>
            <div class="projet3">
                <div class="projet-img">
                    <img>
                </div>
                <div class="projet-legende">
                    Lorem ipsum dolor sit amet consectetur 
                </div>
            </div>
            <div class="projet4">
                <div class="projet-img">
                    <img>
                </div>
                <div class="projet-legende">
                    Lorem ipsum dolor sit amet consectetur 
                </div>
            </div>
        </div>
        <div class="projets-lien-bas">
            <a href="#">
                <span>
                    Autres projets
                </span>
                <svg width="100%" height="auto" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2929 5.35355L14.6464 0.707107L15.3536 0L21.2071 5.85355L15.3536 11.7071L14.6464 11L19.2929 6.35355H0V5.35355H19.2929Z" fill="currentColor"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require 'Vue/vue_header.php';
    echo $content;
    require 'Vue/vue_footer.php';
?>