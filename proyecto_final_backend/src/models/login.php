<?php
$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");
$email = $_POST['email'];
$contraseña = $_POST['password'];

$query = "select count(*) as total from usuarios where email='".$email."' and contraseña='".$contraseña."'";
$resultados = mysqli_query($conexion,$query);

if ($resultados) {
    $fila = mysqli_fetch_assoc($resultados);
    if($fila['total'] > 0){
        header("location: ../views/viewUser.php");
    }else {
        if ($email == "admin@admin.com" & $contraseña == "admin") {
            header("location: ../views/admin.php");
        }else{
            header("location: ../../index.php?valor=usuario icorrecto");
        }
        
    }
}
mysqli_close($conexion);
exit;
?>