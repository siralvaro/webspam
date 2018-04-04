

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
<div class="container">
<h3>DENUNCIAR NUMERO</h3>
<p>No te quedes sin saber quien te llama por teléfono. Envianos tu denuncia o comentario y nosotros encontraremos quién te llama por ti. Para enviar tu denuncia simplemente rellena el siguiente formulario:</p>
<form method='POST'class="form-horizontal" action="<?php echo base_url().'index.php/formularios/validar'?>">
	<div class="form-group">
	<label class="control-label col-sm-2" for="male">Telefono</label>
	<div class="col-sm-10">
	<input name="numtelefono" type="text" id="telefono" onkeypress="return valida(event)" title="El numero debe contener entre 4 y 30 digitos" minlength="4" maxlength="30" placeholder="Numero de Telefono"><br />
</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="male" >Descripcion<br /><span id="info">(M&aacute;ximo 180 caracteres)</span><br /></label>
<div class="col-sm-10">
	<textarea name="descripcion" type="text" id="mi" onkeypress="return limita(event, 180);" onkeyup="actualizaInfo(180)" title="Describa su problema" rows="5" cols="40" value="180" maxlenght="180" minlenght="1" placeholder="Comenta que es lo que pasa cuando llama" ></textarea><br />
</div>
</div>
<div class="container">
	<?php echo $this->recaptcha->render(); ?>
	<input type="submit" class="btn btn-primary" onClick="verificar_campos()" style="margin-top:1%">
</div>
</form>


<!--SCRIPTS JAVA-->
<script>
//Solo permite introducir digitos numericos en el campo de telefono
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

<script>
//Limita Caracteres del campo descripcion
 function limita(elEvento, maximoCaracteres) {
  var elemento = document.getElementById("mi");

  // Obtener la tecla pulsada
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  // Permitir utilizar las teclas con flecha horizontal
  if(codigoCaracter == 37 || codigoCaracter == 39) {
    return true;
  }

  // Permitir borrar con la tecla Backspace y con la tecla Supr.
  if(codigoCaracter == 8 || codigoCaracter == 46) {
    return true;
  }
  else if(elemento.value.length >= maximoCaracteres ) {
    return false;
  }
  else {
    return true;
  }
}

//Actualiza Caracteres
function actualizaInfo(maximoCaracteres) {
  var elemento = document.getElementById("mi");
  var info = document.getElementById("info");

  if(elemento.value.length >= maximoCaracteres ) {
    info.innerHTML = "(M&aacute;ximo "+maximoCaracteres+" caracteres)";
  }
  else {
    info.innerHTML = "(Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales)";
  }
}
</script>


<script>
//Verifica que se haya introducido un valor en el campo telefono
function verificar_campos() {
  var text=document.forms[0].numtelefono.value.length;
  if(text==0) {
  alert("Debe introducir un numero de telefono");
  document.forms[0].numtelefono.focus();
  return false; }
  }
</script>
