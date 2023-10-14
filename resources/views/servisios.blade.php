<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios de Transporte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        .servicio {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        .servicio img {
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
<h1>Nuestros Servicios de Transporte</h1>

<?php
// Datos de servicios de transporte
$servicios = [
    [
        'nombre' => 'Servicio de Taxi',
        'descripcion' => 'Viaje cómodo y rápido con nuestro servicio de taxi.',
        'imagen' => 'https://example.com/taxi.jpg',
        'precio' => 30,
    ],
    [
        'nombre' => 'Autobús Turístico',
        'descripcion' => 'Descubre la ciudad con nuestro autobús turístico.',
        'imagen' => 'https://example.com/bus.jpg',
        'precio' => 15,
    ],
    [
        'nombre' => 'Alquiler de Bicicletas',
        'descripcion' => 'Explora la ciudad de manera ecológica con nuestras bicicletas.',
        'imagen' => 'https://example.com/bike.jpg',
        'precio' => 10,
    ],
];

// Función para mostrar el precio con formato
function mostrarPrecio($precio)
{
    return '$' . number_format($precio, 2);
}
?>

<?php foreach ($servicios as $servicio) : ?>
    <div class="servicio">
        <img src="<?php echo $servicio['imagen']; ?>" alt="<?php echo $servicio['nombre']; ?>">
        <h2><?php echo $servicio['nombre']; ?></h2>
        <p><?php echo $servicio['descripcion']; ?></p>
        <p class="precio"><?php echo mostrarPrecio($servicio['precio']); ?></p>
        <a href="#" class="btn-primary" target="_blank">RESERVAR</a>
    </div>
<?php endforeach; ?>
</body>
</html>