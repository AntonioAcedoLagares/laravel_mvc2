    <!DOCTYPE html>
    <html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Nueva pelicula</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container mt-5">
    <h1>Nueva pelicula aacedo@instiutmvm.cat</h1>

    <form action="/peliculas/create" method="POST" enctype="multipart/form-data" class="mt-4 p-4 border rounded bg-light">
        @csrf  <div class="mb-3">
            <label class="form-label">Titulo de la pelicula</label>
            <input type="text" name="titulo" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Pais</label>
            <input type="text" name="pais" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Selecciona els actores:</label>
            <select name="actores_ids[]" class="form-select" multiple>
                @foreach($actores as $actor)
                    <option value="{{$actor->id}}">{{$actor->nombre}}</option>
                @endforeach
            </select>
            <small class="text-muted">Manten el ctrl para selecionar mas</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Nominaciones al oscar</label>
            <input type="number" step="1" name="nominaciones_oscar" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Oscar ganados</label>
            <input type="number" step="1" name="oscars_ganados" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Portada de la pelicula</label>
            <input type="file" name="imatge" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar a la biblioteca</button>
        <a href="/peliculas/index" class="btn btn-link">Tornar enrere</a>
    </form>
    </body>
    </html>
