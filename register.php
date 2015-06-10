
<!doctype html>
<html>
    <head>
        <?php include("include_header.php"); ?>
        <title>S'enregistrer</title>
    </head>
<?php
$what = $_POST['myname'];
if ($what !='') {
    die;
}

    if (isset($_POST['submit'])) 
    {
        $username = htmlspecialchars (trim ($_POST['username']));
        $mail = htmlspecialchars (trim ($_POST['mail']));
        $mailverif = htmlspecialchars (trim ($_POST['mailverif']));
        $password = htmlspecialchars (trim ($_POST['password']));
        $repeatpassword = htmlspecialchars (trim ($_POST['repeatpassword']));

        if ($username && $mail && $mailverif && $password && $repeatpassword) 
        {
            if (strlen($username)>=3) 
            {
                if (strlen($password)>=5) 
                {
                    if ($mail==$mailverif) {
                        
                    
                   if ($password==$repeatpassword) {
                        if (!empty($_FILES)){
                            $img = $_FILES['photo_user'];
                            $imgnameuser = time() . $img['name'];
                            $ext = array('.png','.jpg','.jpeg','.gif','.PNG','.JPG','.JPEG','.GIF');
                            $extension = strrchr($img,'.');

                            if (!in_array($extension, $ext)) 
                            {
                                $error = "Vous devez uploader un fichier de type png, jpg, jpeg ou gif";
                            }
                            move_uploaded_file($img['tmp_name'], "img_photo_user/".$imgnameuser);

                        
                        
                            $password = md5($password);
                            include("include_config.php");
                                               
                            $query=$bdd->query("INSERT INTO users VALUES ('','$username','$mail','$password','$imgnameuser')");
                                               
                                               echo "<script type='text/javascript'>document.location.replace('connect.php');</script>";
                                           }

                   }else echo "les mots de passe ne correspondent pas";

               }else echo "les adresses mail ne correspondent pas";

                }else echo "Le mot de passe doit comporter au moins 5 caractères";
                
            }else echo "Votre nom d'utilisateur doit comporter au moins 3 caractères";

        }else echo "Les champs n'ont pas étés complétés";
    }

?>
    <body class="background_cover">
        
     
        <div class="container container_connect">
        	<img id="logo" src="img/logo.svg" alt="Way to Track">
        	<h1>Way to track</h1>
        	<h2>Conçu pour les cyclistes</br>qui ne veulent plus rouler seuls.</h2>
        	
            <form method="post" action="register.php" enctype="multipart/form-data" accept="image/*">

        	<div class="input-file-container">  
            <input class="input-file" type="file" name="photo_user" accept="image/*">
            <label tabindex="0" for="profilpicture" class="input-file-trigger">Choisissez votre photo</label>
            </div>

            <div class="group">	
                <input type="text" name="username" required>
                <span class="bar"></span>
                <label for="username">Nom d'utilisateur</label>
            </div>

            <div class="group"> 
                <input type="text" name="mail" required>
                <span class="bar"></span>
                <label for="mail">Adresse email</label>
            </div>

            <div class="group"> 
                <input type="text" name="mailverif" required>
                <span class="bar"></span>
                <label for="mailverif">Confirmation d'adresse email</label>
            </div>

            <div class="group"> 
               <input type="password" name="password" required>
                <span class="bar"></span>
                <label for="password">Mot de passe</label>
            </div>
            <div class="group"> 
               <input type="password" name="repeatpassword" required>
                <span class="bar"></span>
                <label for="password">Confimation du mot de passe</label>
            </div>
            <input type="text" name="myname" class="myname">
                <label for="myname" class="myname">mon_nom</label>

                <input type="submit" name="submit" value="S'enregistrer" id="confirm">
            </form>

        </div>



            <script src="js/main.js" type="text/javascript"></script>
        
    </body>
</html>