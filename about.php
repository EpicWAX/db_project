<!DOCTYPE html> 
<html lang="en"> <!-- Début du HTML -->
<head> <!-- Début du Head -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Data_Project">
    <meta name="author" content="Julie Dietsch, Quentin Husler, Nicola Farion">
    <meta name="keywords" content="HTML,CSS,Php,JavaScript, AngularJs">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>WWW</title>
</head>
<body> 
    <!-- navbar -->
    <div id="main"> 
        <div id="navbar"> 
            <div class="topnav"> 
                <a href="index.html" class="active"><img style="height: 17px;" src="Images/logoWWWwhite.png" alt="logo"></a>
                <a href="team.html">Equipe</a>
                <a href="contact.html">Contact</a>
                <a href="about.html">About</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div> 
        </div> 
    </div> 

    <!--Contenu div about-->
    <!--Contenu div about-->
    <div class="container" id="about"> 
        <div class="row">
            <div class="col-12">
                <h1 id="main_title">What With (my) Wine?</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6" id="utilite"> 
                    <h3>Pourquoi WWW deviendra votre meilleur sommelier ou restaurateur?</h3>
                    <p>WWW vous permet de répondre à des questions toutes simples mais que tout le monde se pose au quotidien : <br>
                    Samedi soir je reçois mes amis à dîner, que devrai-je leur servir comme vin pour accompagner au mieux le boeuf bourguignon que je vais leur cuisiner ?<br>
                    J'ai dans ma cave une bouteille de Pomerol qui est arrivée à maturité, avec quels plats pourrai-je le déguster pour en profiter au maximum ?<br>
                    J'ai l'habitude de boire un Sauternes avec du foie gras, n'y aurait-il pas d'autres vins qui feraient tout aussi bien l'affaire (et peut-être même mieux) ? N'est-ce pas l'occasion de découvrir une autre association de saveurs ?
                    </p>
            </div> 
        
            <div class="col-lg-6" id="infos"> 
                <h3>Informations générales</h3> 
                <p>WWW est un moteur de recherche des meilleurs accords entre plats et vins (mets et vins) et vins et plats.</p>                
                <p>La base de données provient de la plateforme ouverte de données publiques(open datas), consultables sur <a href="https://www.data.gouv.fr/fr/"></a>data.gouv.fr</p>
                <p>Il est entièrement gratuit et a été développé par notre équipe dans le cadre d'un projet d'études</p>
                <p>Le moteur de recherche de WWW fonctionne dans les 2 sens :
                Pour un plat ou un mets, il recherche les meilleurs accords de vins.<br>
                Pour un vin, il recherche les meilleurs accords de plats ou mets.</p>
            </div>  

        </div>
        <div class="row">
            <div class="col-8">
                <h3> Précautions</h3>
                <p>WWW n'a aucunement vocation à faire la promotion de la consommation d'alcool.
                    De par sa richesse, WWW vous fera peut-être découvrir des vins que vous ne connaissiez pas et vous donnera à coup sûr des idées pour cuisiner !
            </p>
            </div>    
            <div class="col-4">
                <img class="biglogo" src="images/logo.png" alt="Logo plat avec couverts et bouteille de vin sur une assiette">
            </div>
        </div>
    </div> 

<footer id="mentions" class="about_footer"> 
    <p class="footer">
        <a href="mentions_legales.html">Mentions Légales</a> 
        <a href="https://www.facebook.com/AccessCodeSchool/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
        « L'abus d'alcool est dangereux pour la santé, consommez avec modération »
    </p>
</footer>

</body> 
</html> 