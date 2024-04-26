<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registrar venta</title>
</head>
<body>
<div class='container'>
    <h1>Registrar venta</h1>
    <form method="POST" action="{{ route('venta.store') }}">
        @csrf
        <div class="mb-3">
            <label for="vehiculo_id" class="form-label">ID Vehiculo</label>
            <input type="text" class="form-control" id="vehiculo_id" name="vehiculo_id" placeholder="ID Vehiculo">
        </div>

        <div class="mb-3">
            <label for="cliente_id" class="form-label">ID Cliente</label>
            <input type="text" class="form-control" id="cliente_id" name="cliente_id" placeholder="ID Cliente">
        </div>

        <div class="mb-3">
            <label for="fecha_venta" class="form-label">Fecha de Venta</label>
            <input type="text" class="form-control" id="fecha_venta" name="fecha_venta" placeholder="YYYY-MM-DD">
        </div>

        <div class="mb-3">
            <label for="precio_final" class="form-label">Precio Final</label>
            <input type="text" class="form-control" id="precio_final" name="precio_final" placeholder="Precio Final">
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('venta.index') }}" class="btn btn-warning">Cancelar</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
