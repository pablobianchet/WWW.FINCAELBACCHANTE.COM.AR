<?php 
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $cuerpo = "Mensaje pagina";
	$mensaje_mail = "Nombre: " . $nombre . "<br> telefono: $telefono <br> Mensaje: . $mensaje";


	if(mail('abogadobianchet@gmail.com', $cuerpo, $mensaje_mail)){
		echo "Correo enviado";
	}
    else{
        echo "Error";
    }
 ?>