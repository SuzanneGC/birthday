<!--nom / date et heure de la fête / thème / lieu : lien qui redirige vers la salle des fêtes-->

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Fête d'anniversaire</title>
<link rel="stylesheet" href="styles.css">    
</script>
</head>

<body>

    <header>
        <img src = "images/degradecouleur.png" id ="iconeTitre">
        <h1 id = "annonceAnniversaire">C'est mon anniversaire !</h1>
        <p>Moi, Suzanne Grelet--Cartier, ai l'immense honneur de vous inviter à ma fête d'anniversaire (20 ans, ça se fête, non ?)
        </p>
    </header>
    <div id = "practialInformation">
        <div class="divPracticalInformation">
            <h1>Quand ?</h1>
            <p>Le 3 mars à 15h30 (c'est un dimanche...)</p>
        </div>  
        <div class="divPracticalInformation">
            <h1>Quel thème ?</h1>
            <p>Sur les furets ! Je veux vous voir dans votre meilleur costume de furet.</p>
            <button id ="savoir+" onclick="displayExplanations()">En savoir plus</button>
        </div>
        <div class="divPracticalInformation">
            <h1>Où ?</h1>
            <p>Vous pouvez cliquer sur le lien suivant pour trouver la salle de fêtes :</p>
            <a href="https://mairie-harcourt.fr/2019/07/30/location-salle-des-fetes-2/">Lien vers le site de la salle des fêtes</a>
        </div>
    </div>
    <p id = "enSavoirPlus" style = "display:none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat neque quis arcu blandit maximus. Cras vel nisl tempus, porttitor mi sit amet, sodales odio. In risus ante, consequat ut pellentesque in, iaculis eu turpis. Morbi vehicula neque orci, at lacinia erat tincidunt sit amet. Nam nec sem vehicula, aliquam nulla at, scelerisque quam. Nunc aliquet justo sed ullamcorper aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris mattis nisi vitae risus sagittis, ut convallis mauris vulputate. Quisque nec sodales lorem, eget consectetur orci. Nam tristique interdum magna eu varius. Phasellus tincidunt, tortor sit amet tincidunt tempor, augue quam ullamcorper nibh, ut faucibus odio nulla in erat. </p>

    <img src="images/furet.png" id = "ferretIcon">
    <img src="images/salle-de-fêtes-extérieur.jpg" id = "placePicture">

    <div id = "inscriptions">
        <form id = "birthdayForm" action = "register.php" method = "POST">
            <input name = "nom" id = "nom" placeholder = "Votre nom">
            <input name = "nombre" type = "number" id = "nombre" placeholder = "Combien serez-vous ?"> 
            <button type = "submit" id = "sendInfo">Envoi</button>
        </form>
        <h1>Déjà combien d'inscrits ?</h1>
        <p>Nombre total d'invités : <?php include "count_guests.php";?></p>
    </div>

    <script src = "script.js"></script>

</body>

</html> 
