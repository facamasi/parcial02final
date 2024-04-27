<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-center text-gray-900">
                    {{ __('Sistema de Gestión de Concesionarios de Automóviles (SGCA)!') }}

                    <div class="mt-4 flex justify-center space-x-24">
                        <div class="mt-4 flex justify-center space-x-24" style="margin: 50px">
                            <div>
                                <a href="{{ route('cliente.index') }}">
                                    <img src="https://i.pinimg.com/originals/60/eb/68/60eb68bb3242ef4ac327a3fe28d25719.png"
                                        alt="Botón 1" width="150" height="150"
                                        class="btn btn-success rounded-full">
                                </a>
                                <a href="{{ route('cliente.index') }}" class="btn btn-success mt-3 block">Clientes</a>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center space-x-24" style="margin: 50px">
                            <div>
                                <a href="{{ route('vehiculo.index') }}">
                                    <img src="https://i.pinimg.com/564x/81/84/e8/8184e89af218254392f8fb8c381d192d.jpg"
                                        alt="Botón 2" width="150" height="150"
                                        class="btn btn-success rounded-full">
                                </a>
                                <a href="{{ route('vehiculo.index') }}" class="btn btn-success mt-3 block">Vehiculos</a>
                            </div>
                        </div>

                        <div class="mt-4 flex justify-center space-x-24" style="margin: 50px">
                            <div>
                                <a href="{{ route('venta.index') }}">
                                    <img src="https://i.pinimg.com/564x/1d/b7/2b/1db72bf2adc432370d1a76df774a2381.jpg"
                                        alt="Botón 3" width="150" height="150"
                                        class="btn btn-success rounded-full">
                                </a>
                                <a href="{{ route('venta.index') }}" class="btn btn-success mt-3 block">Ventas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
