
<?php 
include_once('conexion.php');
if (isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['calificacion']) >= 1 &&
        strlen($_POST['premios']) >= 1 &&
        strlen($_POST['fechaCreaciom']) >= 1 && 
        strlen($_POST['duracion']) >= 1 &&
        strlen($_POST['genero']) >= 1 
    ) {
        $name = trim($_POST['name']);
        $calificacion = trim($_POST['calificacion']);
        $premios = trim($_POST['premios']);
        $fechaCreacion = trim($_POST['fechaCreacion']); 
        $duracion = trim($_POST['duracion']);
        $genero = trim($_POST['genero']);

        $consulta = "INSERT INTO movies (nombre, calificacion, premio, fechaCreacion, duracion, genero) 
                     VALUES ('$name', '$calificacion', '$premios', '$fechaCreacion', '$duracion', '$genero')";
        
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            echo "<h3 class='success'>Tu registro ha sido completado</h3>";
        } else {
            echo "<h3 class='error'>Ocurrió un error: " . mysqli_error($conex) . "</h3>";
        }
    } else {
        echo "<h3 class='error'>Llena todos los campos</h3>";  
    }
}
?>
