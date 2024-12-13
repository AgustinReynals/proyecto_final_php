<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");
$id = $_GET["id"];
$nombre = $_POST['name'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$img = $_FILES['imagen'];
$type = pathinfo($img["name"], PATHINFO_EXTENSION);
$data = file_get_contents($img["tmp_name"]);
$imagen_base64 = "data:image/".$type.";base64,".base64_encode($data);

$des = $_POST['descripcion'];
$update_query = "update productos set nombreProducto='".$nombre."',precioProducto=".$precio.",cantidad=".$cantidad.",imagen='".$imagen_base64. "', descripcion='".$des."' where id=".$id;
$resultado = mysqli_query($conexion,$update_query);
mysqli_close($conexion);
if($resultado){
    header("location: ../views/admin.php?valor=¡se edito correctamente!");
}else{
 header("location: ../views/admin.php?valor= ¡fallo al editar!");
}
exit; 
?>