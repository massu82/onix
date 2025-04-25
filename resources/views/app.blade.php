<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="description" content="Descubre piezas únicas de ónix en iluminación, decoración y baños. Elegancia natural y diseño exclusivo para transformar tus espacios.">
    <meta name="keywords" content="ónix, piedra ónix, lámparas de ónix, decoración con ónix, lavabos de ónix, iluminación de ónix, ónix para baños, tienda de ónix, ónix natural, diseño en ónix, ónix México">

    <link rel="shortcut icon" href="{{ asset('/favicon.png') }}" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Font Adobe -->
    <link rel="stylesheet" href="https://use.typekit.net/vfl2cvq.css">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body class="font-sans antialiased bg-white">
@inertia
</body>
</html>
