<?php
		include('traiterconnexion.php');
		extract($_POST);
		if(isset($submit)){
			connexion($login, $mdp, $profil);	
        }
        
	?>