<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Fromulario Recurso</h1>
        <form action="{{ route('recurso.store') }}" method="POST">
            @csrf
            <label for="categoria">Categoria:</label>
            <select name="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach
            </select>
            <br>

            <label for="url">URL:</label>
            <input type="text" name="url">
            <br>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo">
            <br>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion">

            <br>
            <input type="submit" name="Guardar">
        </form>
    </body>
</html>
