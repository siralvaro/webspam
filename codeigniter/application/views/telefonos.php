<!--Pagina principal-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Buscador</title>
</head>
<body>
<center><div id="container">
	<h2>Quien te llama?</h2>
<!--Buscador de numeros de telefono-->
	<form action="" method="post" class="form">
		<input type="tel" name="telefonos" onkeypress="return valida(event)" title="El numero debe contener entre 4 y 30 digitos" minlength="4" maxlength="30" placeholder="Numero de telefono">
		<input type="submit" class="btn btn-primary" value="Buscar">
	</form>
<!--Si no aparece en el buscador, para poner nueva denuncia-->
<div id="container">
<p>El numero de telefono no aparece en nuestra web, se el primero en denunciarlo</p>
			<a href="http://localhost/proyecto/codeigniter/index.php/formularios/nuevo"><input type="submit" class="btn btn-primary" value="Nueva denuncia"></a></li>
	</div>
<!--Explicacion del sitio web-->
<div id="container" style="margin-top:1%">
	<h2>Que es?</h2>
	<p> Esto es un servicio gratuito en el que no es necesario registrarse destinado a realizar búsquedas de teléfono inversas, es decir, no buscar el teléfono de una persona o empresa en particular, sino buscar a quién o a qué realmente pertenece un número de teléfono, descubrir cuales son sus verdaderas intenciones y cómo detener sus llamadas.

Gracias a la confianza de nuestros usuarios somos la mayor comunidad sobre consulta de teléfonos y el mayor directorio de spam telefónico de toda España y Latinoamérica. Somos el mayor directorio telefónico de empresas de todo Internet, con más de 2000 números de spam telefónico en más de 20 países perfectamente identificados gracias a nuestros usuarios: expertos informáticos, abogados o simples usuarios de Internet.

Se recomienda la búsqueda en nuestro sistema antes de contestar ninguna llamada a algun número desconocido o sospechoso para saber realmente quien me llama y sus intenciones. Se han identificado numerosas estafas en nuestra página web gracias a este sencillo método.

Simplemente dinos qué número te llama, cuéntanos tu experiencia con ese teléfono tan molesto y nosotros te decimos quién es y cómo hacer que deje de llamarte. ¡Así de fácil! Y lo más importante... ¡GRATIS!</p>

</div>
<!--Tabla para mostrar las ultimas denuncias-->
	<table class="table table-hover">
		<h2>Ultimas denuncias</h2>
		<thead>
			<tr>
				<th>Telefonos</th>
				<th>Descripcion</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($telefonos as $datos): ?>
				<tr>
					<td><?php echo $datos->numtelefono; ?></td>
					<td><?php echo $datos->descripcion; ?></td>
				</tr>
			<?php endforeach; ?>

		</tbody>
	</table>
 	</div></center>



</body>
</html>

<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
