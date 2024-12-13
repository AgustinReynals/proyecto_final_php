<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../../public/css/register.css">
    <script src="../../public/js/register.js" defer></script>
</head>
<body>
    <div class="page-container">
        <main class="form-container">

            <form action="../models/register.php" method="POST" id="myForm">
                <?php 
                if(!empty($_GET['valor'])){
                echo "<h2 class='alert'>".$_GET['valor']."</h2>";}
                ?>    
                <h1>Resgistro</h1>
                <span id="errorName-register" style="color: red; display: none;">Este apartado es obligatorio</span><br>
                <input type="text" id="name-register" name="name" placeholder="Nombre"><br>
                <span id="errorLastName-register" style="color: red; display: none;">Este apartado es obligatorio</span><br>
                <input type="text" id="lastName-register" name="lastName" placeholder="Apellido"><br>
                <span id="errorEmail-register" style="color: red; display: none;">Este apartado es obligatorio</span><br>
                <input type="email" id="email-register" name="email" placeholder="Correo electrónico "><br>
                <span id="errorPassword-register" style="color: red; display: none;">Este apartado es obligatorio</span><br>
                <input type="password" id="password-register" name="password" placeholder="Contraseña"><br>
                <input type="submit" class="button-login" value="Registrar"><br>
                <div class="derive-register">
                    <p>Ya tengo una cuenta</p> <a href="../../index.php">Iniciar Sesión</a>
                </div>
            </form>
        </main>
    </div>
</body>
</html>