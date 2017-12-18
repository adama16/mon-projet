<?php
session_start();
if (!$_SESSION['admin']) {
    header('location: connexions.php');
}
if (isset($_POST['deconnexion'])) {
        session_destroy();
        header('location: connexions.php');
}

echo 'hello sonatel academy <br />';
echo 'coding for better life <br /><br />';
$date=date("d-m-y");
$heure=date("h-i");
print("nous sommes le $date <br /> il est $heure a DAKAR");
?>