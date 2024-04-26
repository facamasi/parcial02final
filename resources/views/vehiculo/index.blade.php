<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Vehiculos</title>

  </head>
  <body>
    <div class = "container">
        <h1>Listado de Vehiculos</h1>
        <a href="{{route('vehiculo.create')}}" class="btn btn-success">Añadir</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Año</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Kilometraje</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehiculos as $vehiculos)
                    <tr>
                        <th scope="row">{{ $vehiculos->id }}</th>
                        <td>{{ $vehiculos->marca }}</td>
                        <td>{{ $vehiculos->modelo }}</td>
                        <td>{{ $vehiculos->año }}</td>
                        <td>{{ $vehiculos->precio }}</td>
                        <td>{{ $vehiculos->kilometraje }}</td>
                        <td>{{ $vehiculos->tipo }}</td>
                        <td>
                            <a href="{{ route('vehiculo.edit', ['vehiculo' => $vehiculos->id]) }}" class="btn btn-info">Editar</a>

                            <form action="{{ route('vehiculo.destroy', ['vehiculo' => $vehiculos->id]) }}" method="POST" style="display: inline-block">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
