<?php

$usuario=admin;
$pass=12345;

$u=$_POST['usuario'];// RECURERA DATOS DEL FORMULARIO
$p=$_POST['password'];// RECURERA DATOS DEL FORMULARIO

    

// CUENTA EL NUMERO DE FILAS Q HAY, SI HAY UNA FILA QUIERE DECIR Q EL USUARIO SE ENCUENTRA EN LA BASE DE DATOS
// Y SI NO QUIERE DECIR QUE NO HAY NINGUN USUARIO 

if($usuario ==$u && $pass ==$p)

	{
		
				
			header("location:e10parte10.php");//direcciona a pagina de bienvenida.php
				


	
	}
	else
	{
		
			header("location:index.php");	//vuenve a la pagina de logueo	
    }
?>