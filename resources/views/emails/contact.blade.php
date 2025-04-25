<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Nuevo Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans p-6">
<div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h3 class="text-2xl font-bold mb-4 text-blue-700">Nuevo contacto desde mi web</h3>
    <ul class="space-y-2 text-base">
        <li>
            <span class="font-semibold text-gray-700">Nombre:</span>
            <span class="font-bold">{{$nombre}}&nbsp;{{$apellido}}</span>
        </li>
        <li>
            <span class="font-semibold text-gray-700">Correo:</span>
            <a href="mailto:{{$correo}}" class="text-blue-600 underline font-bold">{{$correo}}</a>
        </li>
        <li>
            <span class="font-semibold text-gray-700">Teléfono:</span>
            <span class="font-bold">{{$telefono}}</span>
        </li>
        <li>
            <span class="font-semibold text-gray-700">Mensaje:</span>
            <span class="font-bold">{{$mensaje}}</span>
        </li>
    </ul>
</div>
</body>
</html>
