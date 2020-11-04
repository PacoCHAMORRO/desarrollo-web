<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desarrollo Web</title>
</head>
<body>
    <h1>Crear Grabación</h1>
    <form action="{{ route('grabacion.store') }}" method="POST">
        @csrf
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" value="{{ old('fecha') ?? $grabacion->fecha ?? '' }}">
        <br>

        <label for="tema">Tema:</label>
        <input type="text" name="tema" value="{{ old('tema') ?? $grabacion->tema ?? '' }}">
        <br>

        <label for="observaciones">Observaciones:</label>
        <textarea name="observaciones">{{ old('observaciones') ?? $grabacion->observaciones ?? '' }}</textarea>
        <br>

        <label for="enlace">Enlace:</label>
        <input type="text" name="enlace" value="{{ old('enlace') ?? $grabacion->enlace ?? '' }}">
        <br>

        <button type="submit">Aceptar</button>
    </form>
</body>
</html>
