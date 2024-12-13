<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion de productos</title>
    <link rel="stylesheet" href="../../public/css/admin.css">
    <script src="../../public/js/admin.js" defer></script>
</head>

<body>
    <?php 
        if(!empty($_GET['valor'])){
        echo "<h2 class='alert'>".$_GET['valor']."</h2>";}
    ?>
    <div class="page-container">
        <h2>Agregar Productos</h2>
        <span id="errorInput" class="errorInput" style="color: red; display: none; margin-bottom: 20px;">Debes completar todos los campos</span>
        <form action="../models/agregarProducto.php" method="POST" id="myForm" enctype="multipart/form-data">
            <div>
            <label>Nombre</label>
            <input type="text" name="name" id="name" placeholder="Nombre">
            </div>
            <div>
            <label for="">Precio</label>
            <input type="text" name="precio" id="precio" placeholder="Precio">
            </div>
            <div>
            <label for="">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad">
            </div>
            <div>
            <label for="">Imagen</label>
            <input type="file" name="imagen" id="imagen" placeholder="Imagen">
            </div>
            <div>
                <label>descripción</label>
                <input type='text' name='descripcion' id='descripcion' placeholder='descripcion'>
            </div>
            <input type="submit" class="button" value="Agregar Producto">
        </form>
    </div>
    <div class="page-container">
        <table>
            <thead>
                <tr>
                    <th>imagen</th>
                    <th>producto</th>
                    <th>precio</th>
                    <th>cantidad</th>
                    <th>modificar</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");

            $query = "select * from productos";
            $resultados = mysqli_query($conexion,$query);
            while ($row = mysqli_fetch_row($resultados)){
            echo "<tr>
                    <td><img src=".$row[4]." alt=".$row[1]."></td>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
                    <td>".$row[3]."</td>
                    <td>
                        <a href='editar.php?id=".$row[0]."' class='edit' >Editar</a>
                        <a href='../models/eliminarProducto.php?id=".$row[0]."' class='delete' >Eliminar</a>
                    </td>
                </tr>";
            }
            mysqli_close($conexion);
            ?>
            </tbody>
        </table>
        <div>
        <a href="viewUser.php"><button class="button">Ir a la vista de usuario</button></a> <a href="../../index.php"><button class="button">volver al inicio de sesión</button></a>
        </div>
    </div>
</body>
</html>