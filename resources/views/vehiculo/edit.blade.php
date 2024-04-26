<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vehiculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar Vehiculo</h1>
        <form method="POST" action="{{ route('vehiculo.update', ['vehiculo'=>$vehiculo->id]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled value = "{{ $vehiculo->id }}">
              <div id="idHelp" class="form-text">Codigo Vehiculo</div>
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" aria-describedby="nameHelp"
                name="marca" placeholder="Marca Vehiculo" value="{{ $vehiculo->marca }}" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" aria-describedby="nameHelp"
                name="modelo" placeholder="Modelo Vehiculo" value="{{ $vehiculo->modelo }}" required>
            </div>

            <div class="mb-3">
                <label for="año" class="form-label">Año</label>
                <input type="text" class="form-control" id="año" aria-describedby="nameHelp"
                name="año" placeholder="Año" value="{{ $vehiculo->año }}" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" aria-describedby="nameHelp"
                name="precio" placeholder="precio" value="{{ $vehiculo->precio }}" required>
            </div>

            <div class="mb-3">
                <label for="kilometraje" class="form-label">Kilometraje</label>
                <input type="text" class="form-control" id="kilometraje" aria-describedby="nameHelp"
                name="kilometraje" placeholder="kilometraje" value="{{ $vehiculo->precio }}" required>
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" aria-describedby="nameHelp"
                name="tipo" placeholder="tipo" value="{{ $vehiculo->tipo }}" required>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{route("vehiculo.index")}}" class="btn btn-warning">Cancelar</a>
            </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      </body>
    </html>
