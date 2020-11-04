<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desarrollo Web</title>
</head>
<body>
    <a href="{{ route('grabacion.index') }}">Listado de Grabaciones</a>
    <a href="{{ route('grabacion.edit', [$grabacion->id]) }}">Editar Grabación</a>
    <hr>
    <h1>Grabación # {{ $grabacion->id }}</h1>
    <ul>
        <li>Fecha: {{ $grabacion->fecha }}</li>
        <li>Tema: {{ $grabacion->tema }}</li>
        <li>Observaciones: {{ $grabacion->observaciones }}</li>
        <li>Enlace: {{ $grabacion->enlace }}</li>
    </ul>
</body>
</html>
