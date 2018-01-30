<?php
    include ("connection.php")
?>

<!DOCTYPE html> 
<html lang="en"> <!-- Début du HTML -->
<head> <!-- Début du Head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Data_Project">
    <meta name="author" content="JulieDi, EpicWaxx, Kateya, NinjaRetroGaming">
    <meta name="keywords" content="HTML,CSS,Php,JavaScript, AngularJs">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!--CDN Jquery pour checkboxes-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    <title>WWW</title>
</head> <!-- Fin du Head -->

<body> <!-- Début du Body -->

    <div id="mywineSidenav" class="sidenav"> <!-- Début de la div sidenav -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
        <div class="tags" id="sidebar_content"> <!-- Début de la div sidebar_content -->
            <h1 class="vin">SELECTIONNEZ UN TYPE DE VIN:</h1>
                <label><input type="checkbox" rel="blanc" />Blanc</label>
                <label><input type="checkbox" rel="petillant" />Pétillant</label></a>
                <label><input type="checkbox" rel="rose" />Rosé</label>    
                <label><input type="checkbox" rel="rouge" />Rouge</label></a>
        </div> <!-- Fin de la div sidebar_content -->
        <div>
            <ul class="results">
                <li class="arts computers"></li>
                <li class="video-games"></li>
                <li class="computers health video-games"></li>
                <li class="arts video-games"></li>
            </ul>
        </div>



        <div id="sidebar_content2"> <!-- Début de la div sidebar_content2 -->
            <h1 class="cru">SELECTIONNEZ UN CRU:</h1>
            <form action="search.php" method="post">
                <input type="text" name="search" />
                <input type="submit" value="Search" />
            </form>
            <br>
            <form action="">
                <input type="text" size="30" onkeyup="showResult(this.value)">
                <div class='suggest'></div>
            </form>

        </div> <!-- Fin de la div sidebar_content2 -->
        <a href="accords.html"><button style="margin-left: -2%" class="button button5">Voir les Résultats</button></a>
    </div> <!-- Fin de la div sidenav -->

    <div id="myfoodSidenav" class="sidenav"> 
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>

        <div id="sidebar_content"> 
            <h1 class="food">SELECTIONNEZ UNE CATEGORIE DE PLAT:</h1>
            <ul>
                <li>Apéritif</li>
                <li>Entrée</li>
                <li>Plat Principal</li>
                <li>Fromage</li>
                <li>Dessert</li>
            </ul>
        </div> 

        <div id="sidebar_content2"> 
            <h1 class="food">SELECTIONNEZ UN TYPE DE PLAT:</h1>
            <ul>
                <li>Viande</li>
                <li>Légumes</li>
                <li>Plat unique</li>
                <li>Poisson</li>
                <li>Fruits de mer et crustacés</li>
                <li>Fruits</li>
                <li>Autres desserts</li>
            </ul>
        </div> 

        <div id="sidebar_content3"> 
            <h1 class="food">SELECTIONNEZ PAR INGREDIENT PRINCIPAL:</h1>
            <ul>
                <li>Veau</li>
                <li>Boeuf</li>
                <li>Agneau</li>
                <li>Porc</li>
                <li>....</li>
                <li>...</li>
                <li>....</li>
            </ul>
        </div> 
        
        <a href="accords.html"><button style="margin-left: -2%" class="button button5">Voir les Résultats</button></a>
    </div> <!-- Fin de la div sidenav -->


    <div id="main"> <!-- Début de la div main -->
        <div id="navbar"> <!-- Début de la div navbar -->
            <div class="topnav" id="myTopnav"> <!-- Début de la div topnav -->
                <a href="index.html" class="active">Home</a>
                <a href="team.html">Equipe</a>
                <a href="contact.html">Contact</a>
                <a href="about.html">About</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>  
            </div> <!-- Fin de la div topnav -->
        </div> <!-- Fin de la div navbar -->
    </div> <!-- Fin de la div main -->

    <div class="titles"> <!-- Début de la div titles -->
            <h1>Lorem Ipsum</h1>
            <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam augue arcu, dapibus ut consequat a, euismod eu nulla. Morbi hendrerit vel est sed facilisis.</P>        
    </div> <!-- Fin de la div titles -->

    <div id="association"> <!-- Début de la div association -->
        <div id="ouvrir"> <!-- Début de la div ouvrir -->
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">VIN</span>
        </div> <!-- Fin de la div ouvrir -->
        <div id="ouvrir2"> <!-- Début de la div ouvrir2 -->
            <span style="font-size:30px;cursor:pointer" onclick="openNav2()">PLAT</span>
        </div> <!-- Fin de la div ouvrir2 -->
    </div> <!-- Fin de la div association -->

    <footer> <!-- Début de la div Footer -->
        <p>Mentions Légales - Réseaux sociaux - Crédits</p>
    </footer> <!-- Fin de la div Footer -->

<script type="text/javascript" src="fichier.js"></script>
<script type="text/javascript" src="afficher_cacher_div.js"></script>
<script type="text/javascript" src="checkboxes.js"></script>
</body> <!-- Fin du Body -->
</html> <!-- Fin du html -->