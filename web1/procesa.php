<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width = device-width, initial-scale = 1.0">
        <meta name = "description" content = "Pagina personal de Mauricio">
        <meta name = "keywords" content="UNAM, FES, Aragon">
        <link rel="icon" href="./assets/img/favicon.ico" type = "image/x-icon">
        <link rel = "stylesheet" href="./assets/css/master.css">
        <script src="./assets/js/cliente.js"></script>
        <title>Primera pagina web</title>
    </head>
        

    <body id="cuerpo">
        <header>
            <h1 style="color: green;font-size: 24px;background-color: darkseagreen;">MI PAGINA PRINCIPAL</h1>
            <nav>
                <ul>
                    <li><a href="https://aragon.unam.mx">FES Aragon</a></li>
                    <li><a href="https://www.google.com">Google</a></li>
                    <li>
                        <ul>
                            <li><a href="code.html">Code</a></li>
                            <li><a href="listas.html">Listas</a></li>
                            <li><a href="enlaces.html">Enlaces e imagenes</a></li>
                            <li><a href="tablas.html">Tablas</a></li>
                            <li><a href="formularios.html">Formularios</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
           <?php
                $usuariodb = "admin";
                $contraseñadb = "patito123";
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $usr= $_POST['usuario'];
                    $pass = $_POST['password'];
                    if($pass ===$contraseñadb && $usuariodb === $usr){
                        echo "<h3> Bienvenido, $usr !</h3>";
                    }else{
                        echo "<h3> Datos incorrectos </h3>";
                    }
                }


           ?>
        </main>

        <footer>
            <p>Todos los derechos reservados FES Aragon</p>
        </footer>
    </body>
</html>