<?php
    session_start();
    if (!$_SESSION['admin']) {
        header('location: connexion.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>projet php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-blue">
    <div 
     style="margin-left: 400px;  
     margin-right:400px; 
     margin-top: 100px; 
     margin-bottom: 200px; ">
    <h3>
        ADAMA </h3>
        <form method="post" action="#">
            choisir une taille  :
            <select name="choix"  >
                <option value="">choix</option>
                <option value="2">02</option>
                <option value="3">03</option>
                <option value="4">04</option>
                <option value="5">05</option>
                <option value="6">06</option>
                <option value="7">07</option>
                <option value="8">08</option>
                <option value="9">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
               
            </select>
            <input type="submit" name="valider" value="Générer" required>
        </form>
        <?php
        if(isset($_POST['valider']) && isset($_POST['choix']))
        extract($_POST);
        {
            if($choix=="")
            {
                echo"Veuillez choisir un nombre svp.";
            }
            else
            {
            echo"<br/><br/><br/><br/><table border='10' width='500' height='500'>";
            $cR=0; $cB=$choix-1;
            for($i=0;$i<$choix;$i++)
            {
                echo"<tr>";
                for($j=0;$j<$choix;$j++)
                {
                    if ($j==$cR && $j==$cB)
                    {
                        echo"<td style='background-color: green;'></td>";
                    }
                    elseif ($j==$cB)
                    {
                        echo"<td style='background-color: blue;'></td>";
                    }
                    elseif ($j==$cR)
                    {
                        echo"<td style='background-color: violet;'></td>";
                    }
                    else
                    {
                        echo"<td style='background-color: fushia;'></td>";
                    }
                }
                $cR++; $cB--;
                echo"</tr>";
            }
            
            }
        }
        ?>
    </div>
    </body>
</html>
