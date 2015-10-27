<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
    <!--HOLA RICARDO-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<script type="text/javascript" language = "javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
		</script>
<script type="text/javascript" language = "javascript" src = "https://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js">
		</script>
		<script>
		$(function() {
			$("#fel").validate(
					{
						rules: {
						nombre: {
								required: true,
								minlength: 5,
								customvalidation: true
							},
						correo:{
							required:true
						},
						op:{
							required:true
						},
						mult:{
							required:true
						}
						},
						messages:{
							nombre:{
								required:"Please insert a name"
							},
							correo:{
								required:"Please insert an email"
							},
							mult:{
								required:"Please select an option"
							},
							correo:{
								required:"Please select an option"
							}
						}
					}
				);
			 $.validator.addMethod("customvalidation",
           function(value, element) {
                   return /^[A-Za-z\d=#$%@_ -]+$/.test(value);
           },
		   "Sorry, no special characters allowed"
		   );
			
		});
		</script>

<?php include 'header.php';?> 
<title>Encuesta de Retroalimentacion</title> 
</head> 
 
<body> 
<h1>Encuesta de Retroalimentacion</h1>
<form action="clientedata.php" id="fel" method="post" onsubmit=""> 
<hr/>  
<p><label for="nombreUsuario" >Nombre:<input type="text" id="nombre" name="nombre" /> 
	</label></p> 
<p><label for="email" >Correo electronico:
	<input type="email" id="email" name='correo' /> 
	
</label></p> 
<p><label for="uso">Aspectos que le gustaron:<br/> 
	<select size="3" multiple="multiple" id="use" name='mult'> 
		<option value="diseño">Diseño</option> 
		<option value="Links">Links</option> 
		<option value="Imagenes">Imagenes</option> 
	</select> 
</label></p> 
<p><label for="op">¿Cómo llegó a este sitio?<br/> 
	<input type="radio" id="busqueda" name="op" value="Maquina de busqueda" class="radio"/>Maquina de busqueda
	<input type="radio" id="libro" name="op" value="Referencia de un libro" class="radio"/>Referencia de un libro
	<input type="radio" id="otro" name="op" value="Otro" class="radio"/>Otro
</label></p> 
<p><input type="submit" value="Submit"/>&nbsp;<input type="reset"/></p> 
</form> 
</body> 
</html> 