<?php
$conexion = mysqli_connect("localhost","root","", "practica3");

if (!$conexion){
    echo "<p style = 'color:red; '>Error: No se pudo conectar a MySQL.</p>". PHP_EOL;
    echo "<p>Traza: </p>" . mysqli_connect_errno() . "<br/><br/>". PHP_EOL;
    exit;
}
echo "<p style = 'color:green; '>La conexión a MySQL fué correcta!</p>". PHP_EOL;
echo "<p>Información de conexión: </p>". mysqli_get_host_info($conexion) . "<br/><br/>". PHP_EOL;

?>