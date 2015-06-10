<!doctype html>
<html>
    <head>
        <?php include("include_header.php"); ?>
        <title>Profil</title>
    </head>
  
    <body>
        <section id="profil">
        <div class="assombrir"></div>
        <div class="banner_top">
                <div class="menu_top menu_top_button"></div>
                <!-- <div class="menu_top filter"></div> -->
            </div>

        <div id="menu_fixed">
            <nav class="menu">
                <a href="profil.php" class="menu_active" id="first_menu"><img src="img/profil.jpg" alt=""></a>
                <p class='act'>
                   
                </p>
                <a href="events.php"><img src="img/event.svg" alt=""></a>
                <p>Évènements</p>
                <a href="events.php"><img src="img/mes_sorties.svg" alt=""></a>
                <p>Participations</p>
                <a href="events.php"><img src="img/add.svg" alt=""></a>
                <p>Mes sorties</p>
            </nav>
        </div>
        <div class="container container_profile">
        	<img id="profil" src="img/profil.jpg" alt="ma photo">
        	<h1>
           
            </h1>
            <a href="logout.php">Deconexion</a>

            <ul class="menu_profil">
                <li>informations</li>
                <li>statistiques</li>
            </ul>
            <div class="info_perso">
                <p class="high">Âge</p>
                <p>27 ans</p>
                <p class="high">Ville</p>
                <p>Namur</p>
                <p class="high">Loisirs</p>
                <p>Modélisme, automobile, graphisme</p>
                <p class="high">Disciplines pratiquées</p>
                <p class="high">VTT</p>
                <p>Randonnée</p>
                <p>Enduro</p>
                <p class="high">Route</p>
                <p>Piste</p>
           </div>
        	<div class="stats">
                <p class="high">Derniers évènements effectués</p>
                <p>12 mars 2015 - VTT Randonnée Hamois 65km</p>
                <p>3 avril 2015 - VTT Enduro Maredsous 30km</p>
                <p>12 mars 2015 - Route Piste Rochefort 90km</p>
                <p class="high">Derniers évènements crées</p>
                <p class="high">Nombre de participations</p>
                <p class="high">Nombre d'évènements créés</p>

            </div>
           <a href="logout.php">se déconnecter</a>
        	</section>
            <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>