<?php
function verif($f, $mot){
		fseek($f, 0);
		while (($ligne = fgets($f)) == true) {
			$user = explode(";", $ligne);
			if ($user[0] == $mot) {
				return 1;
			}
		}
		return 0;
    }
?>    
