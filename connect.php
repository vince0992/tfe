<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL); 
?>
<?php
session_start();
// print_r($_SESSION);
$what = $_POST['myfirstname'];
if ($what !='') {
    die;
}
        if(isset($_POST['submit'])){
            $pseudo = htmlspecialchars(trim($_POST['pseudo']));
            $password = htmlspecialchars(trim($_POST['password']));

            if(empty($pseudo)){
                echo "veuillez saisir votre pseudo</br>";
            }else if(empty($password)){
                echo "veuillez saisir votre mot de passe";
            }else
                {
                include("include_config.php");
                    

                        $y = $bdd->prepare('SELECT COUNT(*) FROM users WHERE username = ?');
                        $y->execute(array($_POST['pseudo']));
                        $x = $y->fetch();

                        if ($x[0] == 0){
                            echo 'Ce nom d\'utilisateur n\'existe pas';
                        }else{
                            //Si adresse email existe alors on vérifie la combinaison
                        }

                        $e = $bdd->prepare('SELECT password FROM users WHERE username = ?');
                        $e->execute(array($_POST['pseudo']));
                        $rep = $e->fetch();
                        $passe = md5($_POST['password']);

                        if ($passe == $rep['password']){
                            $_SESSION['utilisateur'] = $_POST['pseudo'];
                            header('Location: waytotrack.php'); 
                        }else{
                            echo 'Mot de passe incorrect';
                        }

        }
    }
    ?>
    <!doctype html>
<html>
    <head>
        <?php include("include_header.php"); ?>
        <title>Se connecter</title>
        
    </head>

    <body class="background_cover">
        <div class="container container_connect">
        	<img id="logo" src="img/logo.svg" alt="Way to Track">
        	<h1>Way to track</h1>
        	<h2>Conçu pour les cyclistes</br>qui ne veulent plus rouler seuls.</h2>
        	
        	
        	<form method="post" action="">
                <a id ="fb" href="">Se connecter avec Facebook</a>
                <a id="goo" href="">Se connecter avec Google</a>

            
         
            <div class="group">      
                <input type="text" name="pseudo">
                <span class="bar"></span>
                <label for="pseudo">Nom d'utilisateur</label>
            </div>

            <div class="group">
        	   <input type="password" name="password">
                <span class="bar"></span>
                <label for="password">Mot de passe</label>
            </div>

                <input type="text" name="myfirstname" class="myname">
                <label for="myfirstname" class="myname">mon_nom</label>

        	<input type="submit" name="submit" id="confirm" value='Se connecter'>
               <a href="register.php">S'enregistrer<img id="next" src="img/next.svg" alt="S'enregistrer"></a>
            </form>

        </div>
               




            <script src="js/main.js" type="text/javascript"></script>
        
    </body>
</html>