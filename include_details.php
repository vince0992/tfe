 <div id="details">

                    <div class="banner_top banner_details">
                        <div class="menu_top menu_top_button"></div>
                        <div class="menu_top filter"></div>
                        <ul class="menu_selecteur_m2">
                                <li class="menu_07 menu_current">commentaires</li>
                                <li class="menu_08">inscrits</li>
                            </ul>
                    </div>
       
        <div class="container container_details">
    

                <div class="pratique">
                    R
                    <span class="sport">
                        VTT
                    </span>
                </div>


                <div class="presentation">
                <div class="check"><img src="img/check.svg" alt=""></div>
                <a href="javascript:history.back()"><img class="arrow-back" src="img/arrow-back.svg" alt="">    </a> 
                </div>

                <div class="selecteur">
                    <h1><?php echo $donnees['ville']; ?></h1>
                    <p class="date">Sam 12 Sept - 14h30</p>
                    <p class="prix">5€</p>
                    <ul class="menu_selecteur">
                        <li class="menu_01 menu_current">informations</li>
                        <li class="menu_02">description</li>
                        <li class="menu_03">commentaires</li>
                        <li class="menu_04">inscrits</li>
                    </ul>
                    <ul class="menu_selecteur_m1">
                        <li class="menu_05 menu_current">informations</li>
                        <li class="menu_06">description</li>
                    </ul>
                    
                </div>

<!--$$$$$$$$$$$$$$$$$$$$$$ informations $$$$$$$$$$$$$$$$$$$$$$-->
                <div class="informations detail_visible">
                    <div class="createur">
                        <img class="photo_profil" src="img/profil.jpg" alt="">
                        <p class="nom">Cédric Carlson</p>
                    </div>
                <ul class="icones icones_left">
                    <li>
                        <img src="img/km.svg" alt="">
                        <p><?php echo $donnees['distance']; ?>km</p>
                    </li>
                    <li>
                        <img src="img/d+.svg" alt="">
                        <p>1500 m</p>
                    </li>
                    <li>
                        <img src="img/vmoy.svg" alt="">
                        <p>19 km/h</p>
                    </li>
                    <li>
                        <img src="img/duree.svg" alt="">
                        <p>4h00</p>
                    </li>
                </ul>

                <ul class="icones">
                    <li>
                        <img src="img/rav.svg" alt="">
                        <p>15 - 30 - 45 km</p>
                    </li>
                    <li>
                        <img src="img/douche.svg" alt="">
                        <p>Douches</p>
                    </li>
                    <li>
                        <img src="img/bw.svg" alt="">
                        <p>Bike Wash</p>
                    </li>
                    <li class="adresse">
                        <img src="img/adresse.svg" alt="">
                        <p>Rue de la Tour 8</p>
                    </li>
                </ul>
                
                </div>
                <!--$$$$$$$$$$$$$$$$$$$$$$ description $$$$$$$$$$$$$$$$$$$$$$-->
                <div class="description detail_invisible">
                    <p id="texte_descriptif">
                        Le premier tiers du circuit est le plus facile. Il est relativement plat. Après 15 kilomètres environ, vous arrivez dans le bois du bézinat. Cette portion est très agréable : en descente, ombragée, un sol meuble mais bien régulier sans aucune difficulté. Attention toutefois à bien souffler à l'arrivée en bas du chemin, vous tournez à droite et la...ça monte, longtemps (4 kilomètres environ) cette côte peut surprendre...

                    </p>

                </div>

                <!--$$$$$$$$$$$$$$$$$$$$$$ description $$$$$$$$$$$$$$$$$$$$$$-->
                <div class="commentaires detail_invisible for_commentaires">
                  
                    <img src="img/profil.jpg" alt="">
                    <p>Cédric Carlson</p>
                    <p class="comments">
                        La météo s'annonce excellente! Venez nombreux.
                    </p>
                    <img src="img/profil.jpg" alt="">
                    <p>Cédric Carlson</p>
                    <p class="comments">
                        N'oublies pas de prendre de quoi vous ravitailler.
                    </p>
                    
                  
                    <form>
                        <div class="group"> 
                        <img src="img/profil.jpg" alt="">

                            <textarea id="ecrirev" required></textarea>
                            <span class="bar"></span>
                            <label id="ecrirez" for"ecrirev">Écrire un commentaire</label>
                        </div>

                        <input type='submit' id="envoyer_commentaire" value=''>
                    </form>

                </div>

                <!--$$$$$$$$$$$$$$$$$$$$$$ inscrits $$$$$$$$$$$$$$$$$$$$$$-->
                <div class="inscrits">
                    <ul>
                        <li> 
                            <img src="img/profil.jpg" alt="">
                            <p>Cédric Carlson</p>
                        </li>
                        <li>
                            <img src="img/profil.jpg" alt="">
                            <p>Cédric Carlson</p>
                        </li>
                        <li>
                            <img src="img/profil.jpg" alt="">
                            <p>Cédric Carlson</p>
                        </li>
                        <li>
                            <img src="img/profil.jpg" alt="">
                            <p>Cédric Carlson</p>
                        </li>
                    </ul>
                </div>


        	</div><!-- close container details -->


        </div> <!-- fin de detail -->