<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Llistat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1 class="mb-4">Llistat de Peliculas</h1>
<h2 class="mb-4">-Antonio Acedo Lagares–</h2>

<table class="table table-striped table-hover">
    <thead class="table-dark">
    <tr>
        <th>Titulo</th>
        <th>Pais</th>
        <th>Nominaciones oscar</th>
        <th>Oscar ganados</th>
    </tr>
    </thead>
    <tbody>
    @forelse($peliculas as $pelicula)
        <tr>
            <td>{{ $pelicula->titulo }}</td>
            <td>{{ $pelicula->pais }}</td>
            <td>{{ $pelicula->nominaciones_oscar }}</td>
            <td>{{ $pelicula->oscars_ganados }} </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No hi ha llibres a la biblioteca.</td>
        </tr>
    @endforelse
    </tbody>
    <a href="/peliculas/create" class="btn btn-success mb-3">Agregar una nueva pelicula</a>
</table>
</body>
</html>
