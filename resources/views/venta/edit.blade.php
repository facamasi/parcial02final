<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar Venta</h1>
        <form method="POST" action="{{ route('venta.update', ['venta'=>$venta->id]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label">ID</label>
                <input type="text" class="form-control" id="codigo" aria-describedby="codigoHelp" name="id"
                disabled value="{{ $venta->id }}">
                <div id="codigoHelp" class="form-text">ID del venta</div>
            </div>

            <div class="mb-3">
                <label for="vehiculo_id" class="form-label">Vehiculo #</label>
                <input type="text" class="form-control" id="name" placeholder="Vehiculo ID" name="vehiculo_id"
                value="{{ $venta->vehiculo_id }}" required>
            </div>

            <div class="mb-3">
                <label for="cliente_id" class="form-label">Cliente ID</label>
                <input type="text" class="form-control" id="cliente_id" placeholder="Cliente_id" name="cliente_id"
                value="{{ $venta->cliente_id }}" required>
            </div>

            <div class="mb-3">
                <label for="fecha_venta" class="form-label">Fecha de Venta</label>
                <input type="text" class="form-control" id="fecha_venta" placeholder="Fecha de Venta" name="fecha_venta"
                value="{{ $venta->fecha_venta }}" required>
            </div>

            <div class="mb-3">
                <label for="precio_final" class="form-label">Precio Final</label>
                <input type="text" class="form-control" id="precio_final" placeholder="precio_final" name="precio_final"
                value="{{ $venta->precio_final }}" required>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('venta.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

