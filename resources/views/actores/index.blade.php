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
        <th>Nombre</th>
        <th>Fecha nacimiento</th>
        <th>Pais</th>
        <th>Numero de premios</th>
        <th>Cositas</th>
    </tr>
    </thead>
    <tbody>
    @forelse($actores as $actor)
        <tr>
            <td>{{ $actor->nombre }}</td>
            <td>{{ $actor->pais }}</td>
            <td>{{ $actor->fecha_nacimiento }}</td>
            <td>{{ $actor->numero_premios }}</td>
            <td>
                <a href="/actores/show/{{ $actor->id }}" class="btn btn-info btn-sm">Veure</a>
                <a href="/actores/{{ $actor->id }}/destroy" class="btn btn-info btn-sm">Eliminar</a>
                <a href="/actores/edit/{{ $actor->id }}" class="btn btn-info btn-sm">Editar</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No hi ha actores a la biblioteca.</td>
        </tr>
    @endforelse
    </tbody>
    <a href="/actores/create" class="btn btn-success mb-3">Agregar un nuevo actor</a>
    <a href="/peliculas/index" class="btn btn-success mb-3">Ir a lista peliculas</a>
</table>
</body>
</html>

