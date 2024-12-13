<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");
$id = $_GET["id"];

$delete_query = "delete from productos where id =".$id;

$resultado = mysqli_query($conexion,$delete_query);

mysqli_close($conexion);
if($resultado){
header("location: ../views/admin.php?valor=¡Se elimino correctamente!");
}
exit;
?>