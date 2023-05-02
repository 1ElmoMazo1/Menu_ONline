<?php
include("conexionBD.php");

$query = "SELECT * FROM carta ORDER BY id ASC";
$result = mysqli_query($conexion, $query);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        echo $row["nombre"];
}
}
mysqli_close($conexion);
?>