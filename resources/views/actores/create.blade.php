<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Nueva pelicula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<h1>Nueva pelicula aacedo@instiutmvm.cat</h1>

<form action="/actores/create" method="POST" enctype="multipart/form-data" class="mt-4 p-4 border rounded bg-light">
    @csrf  <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Pais</label>
        <input type="text" name="pais" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">numero de premios</label>
        <input type="number" step="1" name="numero_premios" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Guardar a la biblioteca</button>
    <a href="/actores/index" class="btn btn-link">Tornar enrere</a>
</form>
</body>
</html>
