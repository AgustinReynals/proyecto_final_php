<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="public/css/login.css">
    <script src="public/js/login.js" defer></script>
</head>
<body>
    <div class="page-container">
        <main class="form-container">

            <form action="src/models/login.php" method="POST" id="myForm">
                <?php 
                if(!empty($_GET['valor'])){
                echo "<h2 class='alert'>".$_GET['valor']."</h2>";}
                ?>    
                <h1>Inicio de Sesión</h1>
                <span id="errorEmail-login" style="color: red; display: none;">Este apartado es obligatorio</span><br>
                <input type="email" id="email-login" name="email" placeholder="correo electrónico "><br>
                <span id="errorPassword-login" style="color: red; display: none;">Este apartado es obligatorio</span><br>
                <input type="password" id="password-login" name="password" placeholder="Contraseña"><br>
                <input type="submit" class="button-login" value="Iniciar Sesión"><br>
                <div class="derive-register">
                    <p>¿Es tu primera vez?</p> <a href="src/views/registro.php">Regístrate ahora</a>
                </div>
            </form>
        </main>
    </div>
</body>
</html>