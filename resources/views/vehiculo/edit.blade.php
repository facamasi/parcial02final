<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Añadir Cliente</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0b5ed7;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-warning:hover {
            background-color: #ffae00;
            border-color: #ffae00;
        }
        .form-label {
            color: #000;
        }
        .form-control {
            border-color: #ced4da;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Vehiculo') }}
            </h2>
        </x-slot>
        <div class='container'>
            {{-- <h1 class="mb-4">Añadir Cliente</h1> --}}
            <form method="POST" action="{{ route('cliente.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
                    <div id="idHelp" class="form-text">Código Cliente</div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="nombre" placeholder="Nombre Cliente">
                </div>

                <div class="mb-3">
                    <label for="ape" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="ape" aria-describedby="nameHelp" name="apellido" placeholder="Apellido Cliente">
                </div>

                <div class="mb-3">
                    <label for="tel" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="tel" aria-describedby="nameHelp" name="telefono" placeholder="Teléfono">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" aria-describedby="nameHelp" name="email" placeholder="Email">
                </div>

                <div class="mb-3">
                    <label for="dir" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="dir" aria-describedby="nameHelp" name="direccion" placeholder="Dirección">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{route("cliente.index")}}" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </x-app-layout>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
