<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>editar pelicula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1> pelicula aacedo@instiutmvm.cat</h1>

<div class="container mt-5">
    <h2>Editar Pelicula</h2>
    <form action="/peliculas/edit/{{$pelicula->id}}" method="POST" enctype="multipart/form-data" class="mt-4 p-4 border rounded bg-light">
        @csrf  <div class="mb-3">
            <label class="form-label">Titulo de la pelicula</label>
            <input type="text" name="titulo" class="form-control" value="{{ $pelicula->titulo }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Pais</label>
            <input type="text" name="pais" class="form-control" value="{{ $pelicula->pais }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ $pelicula->start_date }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Nominaciones al oscar</label>
            <input type="number" step="1" name="nominaciones_oscar" class="form-control" value="{{ $pelicula->nominaciones_oscar }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Oscar ganados</label>
            <input type="number" step="1" name="oscars_ganados" class="form-control" value="{{ $pelicula->oscars_ganados }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Portada de la pelicula</label>
            <input type="file" name="imatge" class="form-control" value="{{ $pelicula->imatge }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar a la biblioteca</button>
        <a href="/peliculas/index" class="btn btn-link">Tornar enrere</a>
    <div class="col-md-4">
        @if($pelicula->imatge)
            <br>
            <p>Portada de la pelicula actual</p>
            <img src="{{ asset('portades/' . $pelicula->imatge) }}" class="img-fluid rounded">
        @else
            <img src="https://via.placeholder.com/300x400" class="img-fluid">
        @endif
    </div>
</div>
</body>
</html>
