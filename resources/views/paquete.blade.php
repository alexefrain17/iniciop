<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAQUETES DE VUELO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .paquete {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        .paquete img {
            max-width: 100%;
            height: auto;
        }

        .precio {
            color: #007BFF;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<h1>Descubre Nuestros Paquetes de Vuelos</h1>
<?php
// Definir los precios de los paquetes
$precio_paquete_1 = 100;
$precio_paquete_2 = 500;
$precio_paquete_3 = 100;

// Definir los descuentos
$descuento_paquete_1 = 10;
$descuento_paquete_2 = 15;
$descuento_paquete_3 = 5;

// Definir una función para mostrar el precio con formato y descuento
function mostrarPrecioConDescuento($precio, $descuento)
{
    $precioConDescuento = $precio - ($precio * $descuento / 100);
    return '$' . number_format($precioConDescuento, 2);
}
?>
<?php
function obtenerMensaje($precio)
{
    if ($precio > 400) {
        return "¡Este paquete es de lujo!";
    } elseif ($precio > 200) {
        return "¡Una excelente elección!";
    } else {
        return "¡Gran oferta, no te lo pierdas!";
    }
}
?>
<?php
$fecha_actual = date("Y-m-d");
?>

<div class="paquete">
    <img src="https://www.mexicodestinos.com/blog/wp-content/uploads/2016/07/Paquetes-de-Viajes-10-Tips-que-los-expertos-recomiendan.jpeg" alt="Vuelo 1">
    <h2>Paquete Aventura</h2>
    <p>Disfruta de un emocionante viaje con nuestro paquete aventura. Incluye vuelo, alojamiento y actividades emocionantes.</p>
    <p class="precio">$100</p>
    <a href="https://www.despegar.com.pe/paquetes/huu/paquetes-a-huanuco" class="btn-primary" target="_blank">COMPRAR</a>
</div>

<div class="paquete">
    <img src="https://sky-cms-prod.s3.amazonaws.com/SKYDAYS_LSC_original_4ea986785d.jpg" alt="Vuelo 2">
    <h2>Paquete Relax</h2>
    <p>Escapa del estrés diario con nuestro paquete relax. Vuelo, estancia en un resort y masajes relajantes te esperan.</p>
    <p class="precio">$500</p>
    <a href="https://www.swissotellima.com.pe/promociones/p/paquete-relax/" class="btn-primary" target="_blank">COMPRAR</a>
</div>

<div class="paquete">
    <img src="https://www.tingomarianunashtours.com.pe/assets/webimg/2022-07-11_MLQAMI.jpg" alt="Vuelo 3">
    <h2>Paquete Familiar</h2>
    <p>Planifica unas vacaciones familiares inolvidables. Vuelos para toda la familia, alojamiento cómodo y actividades para niños.</p>
    <p class="precio">$100</p>
    <a href="https://www.espanol.skyscanner.com/rutas/lim/huu/lima-a-huanuco.html?&utm_source=google&utm_medium=cpc&utm_campaign=PE-Flights-Search-ES-DSA&utm_term=DYNAMIC+SEARCH+ADS&associateID=SEM_GGF_19370_00007&gclid=CjwKCAjw-KipBhBtEiwAWjgwrFPCYIVxNxI5N9CviJYlZAth3oJiCTnj21HZwVTRAFTKosgNT2yYkhoCEVoQAvD_BwE&gclsrc=aw.ds" class="btn-primary" target="_blank">COMPRAR</a>
<style>
    /* Estilos generales para el cuerpo de la página */
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

/* Estilos para el encabezado h1 */
h1 {
    color: #333;
}

/* Estilos para la clase 'paquete' que envuelve cada paquete */
.paquete {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 20px;
}

/* Estilos para las imágenes dentro de los paquetes */
.paquete img {
    max-width: 100%;
    height: auto;
}

/* Estilos para la clase 'precio' dentro de los paquetes */
.precio {
    color: #007BFF;
    font-size: 1.2em;
}

/* Estilos para el enlace 'COMPRAR' */
.btn-primary {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
}

/* Estilos adicionales según el precio y el mensaje obtenido */
<?php
// Establecer colores adicionales basados en el precio
$color_paquete_1 = ($precio_paquete_1 > 200) ? 'green' : 'red';
$color_paquete_2 = ($precio_paquete_2 > 200) ? 'green' : 'red';
$color_paquete_3 = ($precio_paquete_3 > 200) ? 'green' : 'red';
?>

/* Aplicar estilos según el precio y el mensaje obtenido */
.paquete:nth-child(1) {
    border-color: <?php echo $color_paquete_1; ?>;
}

.paquete:nth-child(2) {
    border-color: <?php echo $color_paquete_2; ?>;
}

.paquete:nth-child(3) {
    border-color: <?php echo $color_paquete_3; ?>;
}

/* Estilos para el mensaje obtenido */
.mensaje {
    font-style: italic;
    color: #333;
}

</style>    
</div>
</body>
</html>