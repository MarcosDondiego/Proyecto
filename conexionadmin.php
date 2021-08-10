<?php
$conexion = mysqli_connect('localhost', 'root', '', 'proyectotrayectoria') 
or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];

    $consulta = "INSERT INTO alumnos
    (matricula, nom_alumno, apellido, carrera, grado, grupo)
    VALUES
    ('$matricula','$nombre','$apellidos','$carrera','$grado','$grupo')";
    

    $resultado=mysqli_query($conexion, $consulta);

    if($resultado == true)
	echo '<script language="javascript">
    alert("Datos agregados correctamente");
	window.location.href="InicioAdmin.html";
	      </script>';
		  
else 
	echo '<script language="javascript">
    elert("Imposible realizar la accion..");
	window.location.href="../InicioAdmin.html";
	      </script>';

    mysqli_close($conexion);
}

?>