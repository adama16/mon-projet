<?php
 session_start();
 if (!$_SESSION['user']) {
     header('location: connexions.php');
 }
 if (isset($_POST['deconnexion'])) {
         session_destroy();
         header('location: connexions.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<table>
		<tr>
			<td>Nombre 1</td>
			<td><input type="number" name="nb1"></td>
		</tr>
		<tr>
			<td>Nombre 2</td>
			<td><input type="number" name="nb2"></td>
		</tr>
		<tr>
			<td>
				<select name="choix">
					<option value="addition">+</option>
					<option value="soustraction">-</option>
					<option value="multiplication">*</option>
					<option value="Division">/</option>
					<option value="Modulo">%</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="CALCULER">
			</td>
		</tr>

	</table>
</form>
</body>
</html>
<?php

	if (isset($_POST['submit'])) 
         extract($_POST);
     
		if (!empty($nb1) AND !empty($nb2)) {

		if ($choix == "addition") {
				echo $nb1 + $nb2;
			}
			elseif ($choix == "soustraction") {
				echo $nb1-$nb2;
			}

			elseif ($choix == "multiplication") {
				echo $nb1*$nb2;
			}

		if ($choix == "division") {
			    echo $nb1/$nb2;
			}	
		
		
	}
 ?>