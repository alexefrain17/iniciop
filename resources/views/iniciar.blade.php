<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <style>   
body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: #d9534f;
            margin-top: 10px;
        }
        body {
            background-image: url('https://th.bing.com/th/id/R.298b3ee9e22f323ab4275ce9a6bef12c?rik=AS7WYXnK0v7bXg&pid=ImgRaw&r=0');
            background-size: cover; /* Para cubrir todo el fondo */
            background-position: center; /* Centrar la imagen */
            font-family: Arial, sans-serif; /* Establecer la fuente */
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        /* Resto de tu estilo... */
        </style>
    </head>
    <body class="antialiased">
    <h2></h2>
    <form action="login.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php
session_start();

// Función para conectar a la base de datos usando PDO
function conectarBaseDeDatos() {
    $servername = "tu_servidor";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $database = "tu_base_de_datos";

    try {
        $conexion = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}

// Función para escapar HTML
function limpiarEntrada($entrada) {
    return htmlspecialchars($entrada, ENT_QUOTES, 'UTF-8');
}

// Función para hashear contraseñas
function hashearContrasena($contrasena) {
    // Puedes ajustar el costo según tus necesidades
    $opciones = ['cost' => 12];
    return password_hash($contrasena, PASSWORD_BCRYPT, $opciones);
}

// Función para cerrar sesión
function cerrarSesion() {
    $_SESSION = array();
    session_destroy();
}

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conexion = conectarBaseDeDatos();

    // Limpiar y validar datos del formulario
    $username = limpiarEntrada($_POST["username"]);
    $password = limpiarEntrada($_POST["password"]);

    try {
        // Consulta para obtener el hash de la contraseña almacenada
        $consulta = $conexion->prepare("SELECT id, nombre_usuario, hash_contrasena FROM usuarios WHERE nombre_usuario = ?");
        $consulta->execute([$username]);

        if ($fila = $consulta->fetch()) {
            $id = $fila['id'];
            $nombre_usuario = $fila['nombre_usuario'];
            $hash_contrasena = $fila['hash_contrasena'];

            // Verificar la contraseña
            if (password_verify($password, $hash_contrasena)) {
                // Inicio de sesión exitoso
                $_SESSION['usuario_id'] = $id;
                $_SESSION['nombre_usuario'] = $nombre_usuario;

                // Redireccionar a la página de inicio
                header("Location: inicio.php");
                exit();
            } else {
                echo '<div class="error">Contraseña incorrecta.</div>';
            }
        } else {
            echo '<div class="error">Usuario no encontrado.</div>';
        }
    } catch (PDOException $e) {
        echo '<div class="error">Error en la consulta: ' . $e->getMessage() . '</div>';
    }

    $conexion = null; // Cerrar la conexión
}
?>

</body>
</html>