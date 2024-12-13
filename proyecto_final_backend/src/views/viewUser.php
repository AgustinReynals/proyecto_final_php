<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/viewUser.css">
</head>
<body>
    <div class="header-container">
        <img src="../../public/img/helados.png" alt="" class="helados-fondo">
        <img src="../../public/img/helados1.png" alt="" id="helados-fondo">
        <div class="header">
            <div class="logo">
                <a href="#">
                    <img src="../../public/img/logo.png" alt="" >
                </a>
            </div>
            <header class="main-header">
                <nav>
                    <a href="#productos">Productos</a>
                    <a href="#loNuevo">¿Qué hay de nuevo?</a>
                    <a href="#">Locales</a>
                    <a href="#QuienesSomos">¿Quienes somos?</a>
                </nav>
            </header>
        </div>
        
        <div class="title">
            <h1>IceCream</h1>
        </div>  
        

    </div>  
        
    <div class="page-container">
        
        <section id="loNuevo">
            <h1>¿Que hay de nuevo?</h1>
            <div class="section-card">
                <?php
                $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");
                $query = "select * from productos order by id desc limit 4;";
                $resultado = mysqli_query($conexion,$query);
                while ($row = mysqli_fetch_row($resultado)) {
                    echo'<div class="card">
                            <img src="'.$row[4].'" alt="Helado de Frutas">
                            <div class="card-content">
                                <h2 class="card-title">'.$row[1].'</h2>
                                <p class="card-description">'.$row[5].'</p>
                            </div>
                         </div>';
                
                }
                mysqli_close($conexion);
                ?>
            </div>
        </section>
        
        <div class="card-container">
            
            <div class="card">
                <h3>Productos de Calidad</h3>
                <p>Utilizamos solo ingredientes frescos y de alta calidad para crear helados que deleiten tu paladar.</p>
            </div>
        
            <div class="card">
                <h3>Buena Atención</h3>
                <p>Nos esforzamos en brindarte un servicio cálido y atento, para que tu experiencia sea perfecta.</p>
            </div>
        
            <div class="card">
                <h3>Sabores Únicos</h3>
                <p>Ofrecemos una amplia variedad de sabores, desde los clásicos hasta combinaciones innovadoras.</p>
            </div>
        
            <div class="card">
                <h3>Ambiente Familiar</h3>
                <p>Creamos un espacio acogedor donde toda la familia puede disfrutar de momentos juntos.</p>
            </div>
        
        
            <div class="card">
                <h3>Compromiso con la Comunidad</h3>
                <p>Apoyamos eventos locales y colaboramos con nuestra comunidad para crecer juntos.</p>
            </div>
        </div>

        <section id="QuienesSomos">
            <h1>¿Quienes somos?</h1>
            <p>En IceCream, somos más que una heladería: somos una experiencia de sabor y felicidad. Nos apasiona crear helados artesanales con ingredientes frescos y de la más alta calidad, siempre buscando sorprender a nuestros clientes con combinaciones únicas y sabores tradicionales.
 
             Cada uno de nuestros helados está hecho con dedicación y amor, desde el proceso de selección de ingredientes hasta el momento en que te servimos una deliciosa porción. Creemos que un helado es más que un postre: es un momento para disfrutar y compartir.
             
             Nuestra historia comenzó con la idea de traer sonrisas a través de sabores irresistibles. Desde entonces, hemos crecido y nos hemos convertido en un lugar favorito de familias, amigos y personas de todas las edades que buscan un momento especial en su día. Nos enorgullece ser parte de la comunidad y de tus momentos más dulces.
             
             Ven a visitarnos y descubre por qué en IceCream nos encanta hacerte feliz con cada bocado.</p>
         </section>

         
        <section id="productos">
            <h1>lo mejor en helados y mucho mas:</h1>
            <div class="section-card">
            <?php
                $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyectoIceCream");
                $query = "select id,nombreProducto,precioProducto,cantidad,imagen,descripcion from productos;";
                $resultado = mysqli_query($conexion,$query);
                while ($row = mysqli_fetch_row($resultado)) {
                    if ($row[3] > 0) {
                        echo '<div class="card">
                                <img src="' . $row[4] . '" alt="' . $row[1] . '">
                                <div class="card-content">
                                    <h2 class="card-title">' . $row[1] . '</h2>
                                    <p class="card-description">' . $row[5] . '</p>
                                    <h3>$' . $row[2] . '</h3>
                                    <a href="#"><button class="card-button">Agregar al carrito</button></a>
                                </div>
                              </div>';
                    } else {
                        echo '<div class="card agotado">
                                <div class="agotado-icon">×</div>
                                <img src="' . $row[4] . '" alt="' . $row[1] . '">
                                <div class="card-content">
                                    <h2 class="card-title">' . $row[1] . '</h2>
                                    <p class="card-description">' . $row[5] . '</p>
                                    <h3>$' . $row[2] . '</h3>
                                    <button class="card-button agotado">Agotado</button>
                                </div>
                              </div>';
                    }
            
            }
            mysqli_close($conexion);
            ?>
            </div>
        </section>
        
    </div>
    <br>

</body>
</html>
