<!DOCTYPE html> 
<html lang="en"> <!-- Début du HTML -->
<head> <!-- Début du Head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Data_Project">
    <meta name="author" content="Julie Dietsch, Quentin Husler, Nicola Farion">
    <meta name="keywords" content="HTML,CSS,Php,JavaScript, AngularJs">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>WWW</title>
</head> <!-- Fin du Head -->
<body> <!-- Début du Body -->

<div id="mySidenav" class="sidenav"> <!-- Début de la div sidenav -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div id="sidebar_content"> <!-- Début de la div sidebar_content -->
    <h1 class="vin">SELECTIONNEZ UN TYPE DE VIN:</h1>
    <form class="typevin" action="choixvin.php" method="post">
        <input class="blanc" type="checkbox" name="choixVin" value="Blanc"> Blanc <br/>
        <input class="petillant" type="checkbox" name="choixVin" value="Pétillant"> Pétillant <br/>
        <input class="rose" type="checkbox" name="choixVin" value="Rosé"> Rosé <br/>
        <input class="rouge" type="checkbox" name="choixVin" value="Rouge"> Rouge <br/>
        <input type="submit">
    </form>
    <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script>
        $(function() { 
            $('input[type="checkbox"]').bind('click',function() {
                $('input[type="checkbox"]').not(this).prop("checked", false);
            });
            });
        $("form").on("submit",function(e) {
            e.preventDefault();
            $.ajax({
            method: "POST",
            url: "choixvin.php",
            data: { 'choixVin': $("input:checked").val()  }
            })
            .done(function( msg ) {
               $("#vins").html(msg);
            });
        })
       
    </script>
 
  <div id="sidebar_content2"> <!-- Début de la div sidebar_content2 -->
        <h1 class="cru">SELECTIONNEZ UN CRU:</h1>
        
        <div id="vins">
           
        </div>   
  </div> <!-- Fin de la div sidebar_content2 -->

  

  <a href="page2.html"><button style="margin-left: -2%" class="button button5">Voir les Résultats</button></a>

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
    
    <a href="page2.html"><button style="margin-left: -2%" class="button button5">Voir les Résultats</button></a>
</div>
<div id="main"> <!-- Début de la div main -->
    <div id="navbar"> <!-- Début de la div navbar -->
        <div class="topnav" id="myTopnav"> <!-- Début de la div topnav -->
            <a href="index.html" class="active"><img style="height: 17px;" src="Images/logoWWWwhite.png" alt="logo"></a>
            <a href="team.html">Equipe</a>
            <a href="contact.html">Contact</a>
            <a href="about.html">About</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>  
        </div> <!-- Fin de la div topnav -->
    </div> <!-- Fin de la div navbar -->
</div> <!-- Fin de la div main -->
    <div class="titles"> <!-- Début de la div titles -->
            <h1>What With (my) Wine?</h1>
            <P>WWW est un moteur de recherche qui sélectionne les meilleurs accords entre vins et plats.</p> <br>
            <p>Cliquez sur l'une des vignettes de votre choix pour définir tout ou partie de vos filtres de recherche: et inversement entre vins et plats.</P>        
    </div> <!-- Fin de la div titles -->
        <div id="association"> <!-- Début de la div association -->
            <div id="ouvrir"> <!-- Début de la div ouvrir -->
                <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">VIN</span>
            </div> <!-- Fin de la div ouvrir -->
            <div id="ouvrir2"> <!-- Début de la div ouvrir2 -->
                <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav2()">PLAT</span>
            </div> <!-- Fin de la div ouvrir2 -->
        </div> <!-- Fin de la div association -->

<footer id="mentions" class="about_footer"> 
    <p class="footer">
        <a href="mentions_legales.html">Mentions Légales</a>
        <a href="https://www.facebook.com/AccessCodeSchool/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
        « L'abus d'alcool est dangereux pour la santé, consommez avec modération »
    </p>
</footer>

<script type="text/javascript" src="fichier.js"></script>
<script type="text/javascript" src="afficher_cacher_div.js"></script>
</body> <!-- Fin du Body -->
</html> <!-- Fin du html -->