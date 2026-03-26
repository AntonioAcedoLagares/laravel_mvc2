<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Nueva pelicula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1> pelicula aacedo@instiutmvm.cat</h1>

<div class="container mt-5">
    <h1>{{ $pelicula->titulo }}</h1>
    <div class="row">
        <div class="col-md-4">
            @if($pelicula->imatge)
                <img src="{{ asset('portades/' . $pelicula->imatge) }}" class="img-fluid rounded">
            @else
                <img src="https://via.placeholder.com/300x400" class="img-fluid">
            @endif
        </div>
        <div class="col-md-8">
            <p><strong>Pais:</strong> {{ $pelicula->pais }}</p>
            <p><strong>Fecha de estreno:</strong> {{ $pelicula->start_date }}</p>
            <p><strong>Nominaciones al oscar:</strong> {{ $pelicula->nominaciones_oscar }} </p>
            <p><strong>Oscar ganados:</strong> {{ $pelicula->oscars_ganados }} </p>
            <p><strong>Actores:</strong></p>
            <ul>
                @foreach($pelicula->actores as $actor)
                    <li>{{ $actor->nombre }}</li>
                @endforeach
            </ul>
            <a href="/peliculas/index" class="btn btn-secondary">Tornar</a>
        </div>
    </div>
</div>
</body>
</html>
