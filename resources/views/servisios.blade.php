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
<body  class="antialiased" background="https://th.bing.com/th/id/R.8547c818b5c41b981cea05ad86a41e24?rik=NGTlvaFTYlqE5g&riu=http%3a%2f%2f1.bp.blogspot.com%2f-dscpRsiyhMw%2fUmjel_xcoyI%2fAAAAAAAACuk%2fcTy-Tl_fJQc%2fs1600%2fP%26J%C2%A9monsieurplusmadame-44.jpg&ehk=0S%2f%2f6WD6owHUkX3bxcpMdk1Owm8kFeYb%2f7mBQBR44qE%3d&risl=&pid=ImgRaw&r=0">>>
<h1>Nuestros Servicios de Transporte</h1>

<?php
// Datos de servicios de transporte
$servicios = [
    [
        'nombre' => 'Servicio de Taxi',
        'descripcion' => 'Viaje cómodo y rápido con nuestro servicio de taxi.',
        'imagen' => 'https://th.bing.com/th/id/OIP.2zWjS8itmMjZ5yWuiBezBAHaE8?pid=ImgDet&rs=1',
        'precio' => 30,
    ],
    [
        'nombre' => 'Autobús Turístico',
        'descripcion' => 'Descubre la ciudad con nuestro autobús turístico.',
        'imagen' => 'https://th.bing.com/th/id/R.6122461f6f596d5c5a488abd430666a7?rik=vaGGd386Rb1Hvw&pid=ImgRaw&r=0',
        'precio' => 15,
    ],
    [
        'nombre' => 'Alquiler de motocitletas',
        'descripcion' => 'Explora la ciudad de manera mas rapida.',
        'imagen' => 'https://th.bing.com/th/id/R.63e3c1849a3d79e0374c6eae73f51953?rik=ucBc8HIeuIj1Qg&pid=ImgRaw&r=0',
        'precio' => 30,
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
        <a href="https://gettransfer.com/es?from_name=Al+Ain+Airport,+United+Arab+Emirates&h1_title=Best%20Price%20Taxi%20from/to%20Al%20Ain%20Airport&utm_source=bing&utm_medium=cpc&utm_campaign=%7Bunited_arab_emirates%7D:483127871&utm_content=1268838058277128&utm_term=kwd-79302873632914:loc-148&msclkid=8bacb1ece36e1e471cc0d4c6b72f1df3" class="btn-primary" target="_blank">RESERVAR</a>
    </div>
<?php endforeach; ?>
</body>
</html>