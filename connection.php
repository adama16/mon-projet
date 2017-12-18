<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">Formulaire de Connexion</h1>
	<form method="POST" action="traiterconnexion.php">
		<tr>
			<td>Login</td>
			<td><input type="text" name="log"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td>Profil</td>
			<td>
				<select name="profil" >
					<option value=""></option>
					<option value="user">user</option>
					<option value="admin">admin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="connecter" value="Se connecter"></td>
		</tr>
	</form>
</body>
</html>