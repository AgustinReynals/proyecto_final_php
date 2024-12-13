<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Productos</title>
    <link rel="stylesheet" href="../../public/css/editarProductos.css">
    <script src="../../public/js/editarProductos.js" defer></script>
</head>
<body>
    <div class="page-container">
        <h2>Editar Productos</h2>
        <span id="errorInput" class="errorInput" style="color: red; display: none; margin-bottom: 20px;">Debes completar todos los campos</span>
        
        <?php
            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");
            $id = $_GET['id'];
            $query = "select nombreProducto,precioProducto,cantidad,imagen,descripcion from productos where id =".$id;
            $resultado = mysqli_query($conexion,$query);
            $row = mysqli_fetch_row($resultado);
            mysqli_close($conexion);
        echo'<form action="../models/editarProductos.php?id='.$id.'" method="POST" id="myForm" enctype="multipart/form-data">';
        echo "
            <div>
                <label>Nombre</label>
                <input type='text' name='name' id='name' placeholder='Nombre' value=".$row[0].">
            </div>
            <div>
                <label>Precio</label>
                <input type='text' name='precio' id='precio' placeholder='Precio' value=".$row[1].">
            </div>
            <div>
                <label>Cantidad</label>
                <input type='number' name='cantidad' id='cantidad' placeholder='Cantidad' value=".$row[2].">
            </div>
            <div>
                <label>Imagen</label>
                <input type='file' name='imagen' id='imagen' value=".$row[3].">
            </div>
            <div>
                <label>Precio</label>
                <input type='text' name='descripcion' id='descripcion' placeholder='descripcion' value=".$row[4].">
            </div>
            <input type='submit' class='button' value='Editar Producto'>";
        ?>
        </form>
    </div>
</body>
</html>