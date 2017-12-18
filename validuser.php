<?php
   


    if(isset($_POST['valider'])){
        extract($_POST);

        // fonction pour generer un mot de passe    
        function chaine_aleatoire($nb_car, $chaine = 'azertyuiopqsdfghjklmwxcvbn123456789')
            {
                $nb_lettres = strlen($chaine) - 1;
                $generation = '';
                for($i=0; $i < $nb_car; $i++)
                {
                    $pos = mt_rand(0, $nb_lettres);
                    $car = $chaine[$pos];
                    $generation .= $car;
                }
                return $generation;
            }

           $passegenerer = chaine_aleatoire(8);

        // fopen() => pour ouvrir le fichier
        $f=fopen("dady.txt","a");

        // fputs() => Pour ecrire sur le Fichier
        fputs($f,$login.';'.$passegenerer.';'.$profil."\r\n");

         // Rediriger vers la page d'ajout d'ulisateur
        header('location:index.html');
        
        //fclose() => Pour fermer le fichier
        fclose($f);
    }
    function connexion($login, $mdp, $profil){
        
        
                $fichier = fopen("utilisateur", "r+");
                fseek($fichier, 0);
                while (($ligne = fgets($fichier)) == true) {
                    $user = explode(";", $ligne);
        
                    if ($user[2] == $mot) {
                        echo "Vrai<br>";
                    }
        
                    if (($user[0] == $login) && ($user[1] == $profil) && ($user[2] == $mot)) {
                        if ($profil == "user") {
                            session_start();
                            $_SESSION['user'] = "user";
                            header('location: heure.php');
                        }
                        else{
                            session_start();
                            $_SESSION['admin'] = "admin";
                            header('location: heure.php');
                        }
                            
                    }
                        
                }
                echo "<br>Login ou identifiant incorrect";
                fclose($fichier);
            }
?>