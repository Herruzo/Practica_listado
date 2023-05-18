<table border='0' cellpadding='4' cellspacing='2'>
<tr>
<td><b>ID</b></td>
<td><b>Nombre</b></td>
<td><b>Apellido</b></td>
<td><b>Edad</b></td>
</tr>
<?php
if(!empty($_REQUEST['consulta'])){
    include('abrecnx.php');
    // Desde abrecnx.php nos viene la conexión

    $consulta = $_REQUEST['consulta']; 
    // Esta linea almacena la consulta

    $resultado = mysqli_query($conexion, $consulta);
    //En mysqli_query() nos pide la conexion y la consulta y la guardamos en resultado.
    
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "
        <tr>
        <td>".$registro['id']."</td>
        <td>".$registro['nombre']."</td>
        <td>".$registro['apellido']."</td>
        <td>".$registro['edad']."</td>
        </tr>
        ";
    };
    mysqli_free_result($resultado);
    echo "</table>";
    include('cierracnx.php');
}else{
    echo "<p>La consulta no ha devuelto resultados.<br/>Debes seleccionar una consulta.</p>";
    };
?>