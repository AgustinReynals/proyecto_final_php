<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");
$nombre = $_POST['name'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$img = $_FILES['imagen'];
$type = pathinfo($img["name"], PATHINFO_EXTENSION);
$data = file_get_contents($img["tmp_name"]);
$imagen_base64 = "data:image/".$type.";base64,".base64_encode($data);

$des = $_POST['descripcion'];
$query = "insert into productos(nombreProducto,precioProducto,cantidad,imagen,descripcion) values ('".$nombre."',".$precio.",".$cantidad.",'".$imagen_base64."','".$des."')";
$resultado = mysqli_query($conexion,$query);
mysqli_close($conexion);
if($resultado){
    header("location: ../views/admin.php?valor=¡se agrego correctamente!");
}else{
header("location: ../views/admin.php?valor=¡fallo al agregar!");
}
exit;

?>