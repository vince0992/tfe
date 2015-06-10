<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL); 
?>
<?php
session_start();
// require("auth.php");
// if(Auth::isLogged()){
//    echo "bien enregistré";
// }else{
//    header('Location:connect.php');
// }
// print_r($_SESSION) ;
if (empty ($_SESSION)) {
   header('Location:connect.php');
}
?>

<!doctype html>
<html>
    <head>
        <?php include("include_header.php"); ?>
        <title>Way to Track</title>
        
    </head>

    <body>

    	<!-- menu -->
        <?php include("include_menu.php"); ?>
    	


        <!-- events -->
        <section id="events" class="first">
       		 <div class="assombrir"></div>
        		<div class="banner_top">
                    <div class="menu_top menu_top_button"></div>
                    <img src="img/logo_banner.svg" alt=""> <h1>Way to Track</h1>

                    <div class="menu_top filter"></div>
                </div>
		<?php include("include_filter.php"); ?>
        
        
          
          <div class="container container_events">  
        <?php
        include("include_config.php");
        
        $reponse = $bdd->query('SELECT * FROM Events ORDER BY date_moment DESC');
        while ($donnees = $reponse->fetch()) {
        	?>
          


          <a href="#details">
            
                <div class="event">

                <div class="pratique">
                    <?php
                		echo $donnees['discipline'];
            		?>
                    
                </div>
                                   
                               <div class="presentation">
                                    	<div id="cover_overflow">
                            				<img class="cov" src="img_photo_cover/<?php echo $donnees['photo_cover']; ?>"/>
                            			</div><!-- close cover overflow -->
                                    	

                                    <div class="check"><img src="img/check.svg" alt="">
                                    </div>

                                     <div class="degrade"></div>
                                        <h1><?php echo $donnees['ville']; ?></h1>
                                    </div> <!-- close presentation -->
                    
                    <?php
                    $afficher_date=$donnees['date_moment'];
                    ?>
			<?php
			$afficher_date=$donnees['date_moment'];
			$afficher_heure=$donnees['heure'];
			$afficher_duree=$donnees['duree'];

            list($year, $month, $day) = explode("-", $afficher_date);
            list($hour, $minut, $second) = explode(":", $afficher_heure);
            list($hour, $minut, $second) = explode(":", $afficher_duree);

            $months = array("janv", "févr", "mars", "avr", "mai", "juin",
                                "juil", "août", "sept", "oct", "nov", "déc");
			?>
                            <div class="infos">
                                <p class="nom">Cédric C.</p>
                                <?php
                                if (($donnees['prix'])>0) {
                                    echo "<p class='prix'>".$donnees['prix']."€</p>";
                                }
                                ?>
                                <!-- <p class='prix'><?php //echo $donnees['prix']; ?>€</p> -->
                                <p class="date">
                                	<?php
                                	   echo $afficher_date = $day.' '.$months[$month-1].' - '/*.$year*/;
                                	   echo $afficher_heure = $hour.'h'.$minut;
                                	?>
                                </p>
                            </div>

                <div class="infos_secondaires">
                    <img class="photo_profil" src="img/profil.jpg" alt="">
                    <!-- <img class="photo_profil" src="img_photo_user/<?php //echo $donnees['photo_user']; ?>"/> -->

                    <p>
                    <img src="img/km.svg" alt="">
                    </br><?php echo $donnees['distance']; ?>km
                    </p>
                    <p>
                    <img src="img/d+.svg" alt="">
                    </br><?php echo $donnees['denivele']; ?>m
                    </p>
                    <p>
                    <img src="img/vmoy.svg" alt="">
                    </br><?php echo $donnees['vmoy']; ?>km/h
                    </p>
                    <p>
                    <img src="img/duree.svg" alt="">
                    </br><?php echo $afficher_duree = $hour.'h'.$minut;?>
                    </p>
                </div>
<!-- div detail doit venir ici -->
<?php include("include_details.php"); ?>
<!-- jusque la -->

            
<!-- $$$$$$$$$$$$$$$$$$$$ floating button $$$$$$$$$$$$$$$$$$$$ -->
       </div><!-- close events -->
 
</a>
       

       

<?php
        }
        $reponse->closeCursor();
        ?>
        
        </div><!-- close container_events -->

            <a href="#create"><img class="floating_button"src="img/add.svg" alt=""></a>


		</section>
	
       		<!-- create -->
            <?php include("include_create.php"); ?>

    
            <script src="js/main.js" type="text/javascript"></script>

    </body>
</html>