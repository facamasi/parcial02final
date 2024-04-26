<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ventas</title>

</head>

<body>
    <div class = "container">
        <h1>Ventas</h1>
        <a href="{{ route('venta.create') }}" class="btn btn-success">Añadir</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">ID Vehiculo</th>
                    <th scope="col">ID Cliente</th>
                    <th scope="col">Fecha de Venta</th>
                    <th scope="col">Precio Final</th>

                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $ventas)
                    <tr>
                        <th scope="row">{{ $ventas->id }}</th>
                        <td>{{ $ventas->vehiculo_id }}</td>
                        <td>{{ $ventas->cliente_id }}</td>
                        <td>{{ $ventas->fecha_venta }}</td>
                        <td>{{ $ventas->precio_final }}</td>
                        <td>
                            <a href="{{ route('venta.edit', ['venta' => $ventas->id]) }}"
                                class="btn btn-info">Editar</a>

                            <form action="{{ route('venta.destroy', ['venta' => $ventas->id]) }}"
                                method="POST" style="display: inline-block">
                                @method('delete')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
