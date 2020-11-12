<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desarrollo Web</title>
</head>
<body>
    <h1>Crear Grabación</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(isset($grabacion))
        <form action="{{ route('grabacion.update', [$grabacion]) }}" method="POST">
        @method('patch')
    @else
        {!! Form::open(['route' => 'grabacion.store']) !!}

    @endif

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

        <select name="tema_id[]" multiple>
            @foreach ($temas as $tema)
                <option value="{{ $tema->id }}" {{ in_array($tema->id, $grabacion->temas()->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tema->tema }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Aceptar</button>
    {!! Form::close() !!}
</body>
</html>
