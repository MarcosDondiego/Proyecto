<?php
$conexion = mysqli_connect('localhost', 'root', '', 'proyectotrayectoria') 
or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $matricula = $_POST['matricula'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
   

    $consulta = "INSERT INTO usuario
    (matricula, usuario, contraseña)
    VALUES
    ('$matricula','$usuario','$contraseña')";
    

    $resultado=mysqli_query($conexion, $consulta);

    if($resultado == true)
	echo '<script language="javascript">
    alert("Datos agregados correctamente");
	window.location.href="registrousuario.html";
	      </script>';
		  
else 
	echo '<script language="javascript">
    elert("Imposible realizar la accion..");
	window.location.href="../registrousuario.html";
	      </script>';

    mysqli_close($conexion);
}