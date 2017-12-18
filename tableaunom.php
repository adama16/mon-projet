<?php
 session_start();
 if (!$_SESSION['admin']) {
     header('location: connexions.php');
 }
 if (isset($_POST['deconnexion'])) {
         session_destroy();
         header('location: connexions.php');
 }


$tab = array(
     array(12,"bassirou",45),
       array(15,"astou", 48),
       array(18,"madina",32),
       array(19,"amadou",17),
       array(20,"nadia",18) 
);
if(isset($_post["modifier"]))
{
    extract ($_post);
    for($i=0; $i<5; $i++)
    {
        if($code==$tab[$i][0])
     {
        $tab[$i][1]=$nom;
        $tab[$i][2]=$age;
     }
    }
    echo "<table border='1'width='600'>";
    echo "<tr><td>code</td><td></td><td>age</td></tr>";
    for ($i=0;$i<5; $i++)
    {
        echo '<tr>
                <td>'.$tab[$i][0].'</td>
                <td>'.$tab[$i][1].'</td>
                <td>'.$tab[$i][2].'</td>
                <td><a href="code1.php"></a></td>
                </tr>';
    }
}
else{
    echo "<table border='1'width='600'>";
    echo "<tr><td>code</td><td>nom</td><td>age</td></tr>";
    for ($i=0;$i<5; $i++)
    {
        echo '<tr>
                <td>'.$tab[$i][0].'</td>
                <td>'.$tab[$i][1].'</td>
                <td>'.$tab[$i][2].'</td>
                <td><a href="code1.php"?code='.$tab[$i][0].'&amp;nom='.$tab[$i][1].'&amp;age='.$tab[$i][2].'">modifier</a></td>
                </tr> ';

    }

}
?>
