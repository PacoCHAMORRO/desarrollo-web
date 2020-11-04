<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desarrollo Web</title>
</head>
<body>
    <a href="{{ route('grabacion.create') }}">Nueva Grabación</a>
    <hr>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Tema</th>
            <th>Enlace</th>
        </tr>
        @foreach ($grabaciones as $grabacion)
            <tr>
                <td>{{ $grabacion->id }}</td>
                <td>{{ $grabacion->fecha }}</td>
                <td>{{ $grabacion->tema }}</td>
                <td>{{ $grabacion->enlace }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
