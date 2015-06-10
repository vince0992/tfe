<?php
$what = $_POST['mytrack'];
if ($what !='') {
    die;
}
    if (isset($_POST['submit'])) 
    {
        $ville = htmlspecialchars (trim ($_POST['ville']));
        $date_moment = htmlspecialchars (trim ($_POST['date_moment']));
        $heure = htmlspecialchars (trim ($_POST['heure']));
        $payant = $_POST['payant'];
        $prix = htmlspecialchars (trim ($_POST['prix']));
        $discipline = $_POST['discipline'];
        $distance = htmlspecialchars (trim ($_POST['distance']));
        $denivele = htmlspecialchars (trim ($_POST['denivele']));
        $vmoy = htmlspecialchars (trim ($_POST['vmoy']));
        $duree = htmlspecialchars (trim ($_POST['duree']));
        $ravitos = $_POST['ravitos'];
        $ravitokm = htmlspecialchars (trim ($_POST['ravitokm']));
        $douches = $_POST['douches'];
        $bikewash = $_POST['bikewash'];
        $adresse = htmlspecialchars (trim ($_POST['adresse']));
        $description = htmlspecialchars (trim ($_POST['description']));

        if ($ville && $date_moment && $heure && $discipline && $distance && $denivele && $vmoy && $duree && $adresse && $description) 
        {    
            if (!empty($_FILES))
            {

                    $img = $_FILES['photo_cover'];
                    $imgname = time() . $img['name'];
                    $createur = 

                    // $taille_max = 40;
                    // $taille = filesize($_FILES['file']['tmp_name']);
                    $ext = array('.png','.jpg','.jpeg','.gif','.PNG','.JPG','.JPEG','.GIF');
                    $extension = strrchr($img,'.');

                    if (!in_array($extension, $ext)) 
                    {
                        $error = "Vous devez uploader un fichier de type png, jpg, jpeg ou gif";
                    }
                    // if ($taille>$taille_max) {
                    //     $error = "Le fichier dépasse 4mo";
                    // }
                    // if (!empty($error)) 
                    // {
                    //     echo $error;
                    //     die;

                    // }
                   
                    move_uploaded_file($img['tmp_name'], "img_photo_cover/".$imgname);
                    include("include_config.php");
                    

                    $query = $bdd->query("INSERT INTO Events VALUES ('','$ville','$date_moment','$heure', 
                             '$payant','$prix', '$discipline', '$imgname', '$createur', '$distance', '$denivele', 
                            '$vmoy', '$duree', '$ravitos', '$ravitokm', '$douches', '$bikewash', '$adresse', '$description', 'photo_description')");
                       // echo "<script type='text/javascript'>document.location.replace('create.php');</script>";
                    

                    
                }else echo "erreur de chargement de la photo";

            

        }else echo "Les champs n'ont pas étés complétés";
    }
// Partie 2

?>
       		<section id="create">
            <div class="banner_top">
                <a href="javascript:history.back()"><div class="menu_top back_create"></div></a>
                    
            </div>
        <div class="container container_create">
        	   
            <form id ="creation" method="post" action="waytotrack.php" enctype="multipart/form-data" accept="image/*">
                <div class="top_create">
                    <img class="prev" src="img/transparent.png" alt="">
                    <p>Choisissez la photo de présentation</p>
                    
                </div>
            <div class="input-file-container">  
                        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> -->
            <input class="input-file" id="my-file" type="file" name="photo_cover" accept="image/*">
            <label tabindex="0" for="my-file" class="input-file-trigger"><img src="img/camera.svg" class="camera" alt=""></label>
            </div>
        	   

            <div class="group" id="first_group_create">	
            <input type="text" name="ville" onblur="verifVille(this)" required>
            <span class="bar"></span>
            <label for="ville">Ville de départ</label>
            </div>

            <div class="group"> 
            <input type="text" name="adresse" required>
            <span class="bar"></span>
            <label for="adresse">Adresse du départ</label>
            </div>
            
            <div class="group short_mobile"> 
            <input type="date" name="date_moment" required>
            <span class="bar"></span>
            <label for="date">Date</label>
            </div>

            <div class="group short_mobile"> 
            <input type="time" name="heure" required>
            <span class="bar"></span>
            <label for="heure">Heure</label>
            </div>

            <div class="group">
                <label id="discipline" name="discipline">Discipline</label>

                <select name='discipline' required>
                    <option selected disabled></option>
                    <optgroup label="VTT">
                    <option>Randonnée vtt</option>
                    <option>Enduro</option>
                    <option>Descente</option>
                    </optgroup>

                    <optgroup label="Route">
                    <option>Cyclotourisme</option>
                    <option>Randonnée route</option>
                    <option>Piste</option>
                    </optgroup>

                    <optgroup label="Autre">
                    Autre
                    <option>Cyclocross</option>
                    <option>BMX</option>
                    <option>Slopestyle</option>
                    <option>Trial</option>
                    <option>Autre</option>
                    </optgroup>

                </select>
            </div>

            <div class="group short_mobile mb"> 
            <input type="time" name="duree" required>
            <span class="bar"></span>
            <label for="duree">Durée</label>
            </div>

            <div class="group short"> 
            <input type="text" name="distance" required>
            <span class="bar"></span>
            <label for="distance">Distance <span class="little">(km)</span></label>
            </div>

            <div class="group short"> 
            <input type="text" name="denivele" required>
            <span class="bar"></span>
            <label for="denivele">Dénivelé <span class="little">(m)</span></label>
            </div>

            <div class="group short"> 
            <input type="text" name="vmoy" required>
            <span class="bar"></span>
            <label for="vmoy">Vitesse moyenne <span class="little">(km/h)</span></label>
            </div>

            <div class="group veryshort pr"> 
            <input id="payant" type="checkbox" name="payant">
            <label for="payant">Payant</label>
            </div>

            <div class="group veryshort pr"> 
            <input id="ravito" type="checkbox" name="ravitos" value="">
            <label for="ravitos">Ravitaillement</label>
            </div>

            <div class="group veryshort dbw"> 
            <input id ="douches" type="checkbox" name="douches">
            <label for="douches">Douches</label>
            </div>
           
            <div class="group veryshort dbw"> 
            <input id="bikewash" type="checkbox" name="bikewash">
            <label for="bikewash">Bike wash</label>
            </div>

            <div class="group payantok none"> 
            <input type="text" name="prix">
            <span class="bar"></span>
            <label for="prix">Prix (€)</label>
            </div>

            <div class="group ravitook none"> 
            <input type="text" name="ravitokm">
            <span class="bar"></span>
            <label for="ravitokm">Kilométrage des rav.</label>
            </div>

            <div class="group desc"> 
            <input type="text" name="description" required>
            <span class="bar"></span>
            <label for="adresse">Description du parcours</label>
            </div>
           
                <!-- <input type="text" name="mytrack" class="myname">
                <label for="mytrack" class="myname">mon_nom</label> -->

        	<input type="submit" name="submit" value="Enregistrer l'évènement" id="confirm">
            </form>
 <script>
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function verifPseudo(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifAge(champ)
{
   var age = parseInt(champ.value);
   if(isNaN(age) || age < 5 || age > 111)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifForm(f)
{
   var pseudoOk = verifPseudo(f.pseudo);
   var mailOk = verifMail(f.email);
   var ageOk = verifAge(f.age);
   
   if(pseudoOk && mailOk && ageOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
    </script>
  </section>