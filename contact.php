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
<div id="main"> <!-- Début de la div main -->
    <div id="navbar"> <!-- Début de la div navbar -->
        <div class="topnav"> <!-- Début de la div topnav -->
            <a href="index.html" class="active"><img style="height: 17px;" src="Images/logoWWWwhite.png" alt="logo"></a>
            <a href="team.html">Equipe</a>
            <a href="contact.html">Contact</a>
            <a href="about.html">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div> <!-- Fin de la div topnav -->
    </div> <!-- Fin de la div navbar -->
</div> <!-- Fin de la div main -->

    <div class="container2"> <!-- Début de la div container -->
            <h5>Formulaire de Contact</h5>
            <p> Un commentaire? Une suggestion? Une question à nous poser? <br> N'hésitez pas à nous les transmettre par le biais du formulaire ci-dessous :</p>
        <form action="/action_page.php"> <!-- Début de la form -->
                <label for="fname">Votre Prenom</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre prenom">
                <label for="lname">Nom de Famille</label>
                <input type="text" id="lname" name="lastname" placeholder="Votre Nom de Famille">
                <label for="country">Pays</label>
                <select id="country" name="country">
                    <option value="france">France</option>
                    <option value="uk">United Kingdom</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="china">China</option>
                </select>
                <label for="subject">Sujet</label>
                <textarea id="subject" name="subject" placeholder="Ecrivez votre message ici..." style="height:200px"></textarea>
            
                <input type="submit" value="Envoyer">
            </form> <!-- Fin de la form -->
        </div> <!-- Fin de la div container -->

<footer id="mentions" class="about_footer"> 
    <p class="footer">
        <a href="mentions_legales.html">Mentions Légales</a> 
        <a href="https://www.facebook.com/AccessCodeSchool/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
        « L'abus d'alcool est dangereux pour la santé, consommez avec modération »
    </p>
</footer>

</body> <!-- Fin du Body -->
</html> <!-- Fin du html -->