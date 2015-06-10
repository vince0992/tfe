<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL); 
?>
<?php
Class Auth{
	static function isLogged(){
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['pseudo']) && isset($_SESSION['Auth']['password'])){
			return true;
		}else return false;
	}
}
?>