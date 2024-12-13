<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");
$email = $_POST['email'];
$contraseña = $_POST['password'];
$nombre = $_POST['name'];
$apellido = $_POST['lastName'];
$query = "select count(*) as total from usuarios where email='".$email."'";
$resultados = mysqli_query($conexion,$query);

if ($resultados) {
    $fila = mysqli_fetch_assoc($resultados);
    if($fila['total'] > 0){
        header("location: ../views/registro.php?valor=El correo electrónico ya esta en uso");
    }else {
        $insert = "insert into usuarios(nombre,apellido,email,contraseña) values('".$nombre."','".$apellido."','".$email."','".$contraseña."')";
        $resultados_insert = mysqli_query($conexion,$insert);
        
        if($resultados_insert){
            header("location: ../../index.php");
        }
    }
}
mysqli_close($conexion);
exit;
?>