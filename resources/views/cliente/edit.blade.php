<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar Cliente</h1>
        <form method="POST" action="{{ route('cliente.update', ['cliente'=>$cliente->id]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label">ID</label>
                <input type="text" class="form-control" id="codigo" aria-describedby="codigoHelp" name="id"
                disabled value="{{ $cliente->id }}">
                <div id="codigoHelp" class="form-text">ID del cliente</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre del cliente" name="nombre"
                value="{{ $cliente->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="ape" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="ape" placeholder="Apellido del cliente" name="apellido"
                value="{{ $cliente->apellido }}" required>
            </div>

            <div class="mb-3">
                <label for="tel" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="tel" placeholder="Teléfono del cliente" name="telefono"
                value="{{ $cliente->telefono }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email del cliente" name="email"
                value="{{ $cliente->email }}" required>
            </div>

            <div class="mb-3">
                <label for="dir" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="dir" placeholder="Dirección del cliente" name="direccion"
                value="{{ $cliente->direccion }}" required>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('cliente.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

