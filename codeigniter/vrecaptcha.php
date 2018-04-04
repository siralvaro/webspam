<!DOCTYPE html>
<html>
<head>
	<title>recaptcha</title>
	<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</head>
<body align="center">
<div style="text-align: center; border: 1px solid #CCC; padding:20px; width:350px; margin-top: 50px; margin-left: auto; margin-right: auto;">

	<form action="<?php echo base_url();?>crecaptcha/validar" method="POST">
		<table cellpadding="10">
			<tr>
				<td>Usuario</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Contraseña</td>
				<td><input type="password" name=""></td>
			</tr>
			<tr>
				<td colspan="2"><?php echo $this->recaptcha->render(); ?></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="" value="Ingresar"></td>
			</tr>
		</table>		
	</form>
</div>
</body>
</html>