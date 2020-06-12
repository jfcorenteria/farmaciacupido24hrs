<?php
/*require_once "formulario.php"*/
$conectar = mysqli_connect("localhost","root","","base_pagina");

if (!$conectar) {
	echo "Error al intentar conectar con el servidor";
}
else
{
	$base_pagina=mysql_select_db(base_pagina);

	if (!base_pagina)
	 {
	echo "no se pudo encontrar la base de datos solicitada";
	}
	}
$Nombre=$_POST['Nombre'];
$Correo=$_POST['Correo'];
$Mensaje=$_POST['Mensaje'];

sql="INSERT INTO contenido VALUES('$Nombre', '$Correo','$Mensaje')";

$ejecutar=mysql_query(sql);

if(!$ejecutar)
{
	echo "Ocurrio  un error inesperado al momento de guardar los datos";
}
else
{
	echo "Datos guardados exitosamente <br><a href='Contactanos.html'>Regresa";

}
?>
