<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Vehiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff;
        }
        .container {
            margin-top: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Listado de Vehiculos') }}
            </h2>
        </x-slot>
        <div class="container">
            <!-- Contenido de la página -->
            {{-- <h1 class="mb-4">Listado de Vehiculos</h1> --}}
            <a href="{{route('vehiculo.create')}}" class="btn btn-success mb-3">Añadir Vehiculo</a>
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
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
                @foreach ($vehiculos as $vehiculo)
                    <tr>
                        <th scope="row">{{ $vehiculo->id }}</th>
                        <td>{{ $vehiculo->marca }}</td>
                        <td>{{ $vehiculo->modelo }}</td>
                        <td>{{ $vehiculo->año }}</td>
                        <td>{{ $vehiculo->precio }}</td>
                        <td>{{ $vehiculo->kilometraje }}</td>
                        <td>{{ $vehiculo->tipo }}</td>
                        <td>
                            <a href="{{ route('vehiculo.edit', ['vehiculo' => $vehiculo->id]) }}" class="btn btn-info btn-sm">Editar</a>
                            <form action="{{ route('vehiculo.destroy', ['vehiculo' => $vehiculo->id]) }}" method="POST" style="display: inline-block;">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </x-app-layout>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
