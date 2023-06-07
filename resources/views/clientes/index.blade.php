
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cliente') }}
            <a href="{{ route('clientes.create') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Crear cliente</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-center mb-5">Clientes</h2>

<div class="p-6 bg-white border-b border-gray-200">
    <table class="table-auto">
        <thead class="bg-primary text-light">
            <tr class="border-b border-gray-200 text-sm">
                <th scole="col" class="px-6 py-4">Nombre Completo</th>
                <th scole="col" class="px-6 py-4">Dirección</th>
                <th scole="col" class="px-6 py-4">Telefono</th>
                <th scole="col" class="px-6 py-4">Telefono Alternativo</th>
                <th scole="col" class="px-6 py-4"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente )
                <tr>
                    <td>{{ $cliente->fullname }}</td>
                    <td>{{ $cliente->address }}</td>
                    <td>{{ $cliente->phone }}</td>
                    <td>{{ $cliente->phone_alternative }}</td>
                    <td>
                       <a href="#" class="btn btn-dark mr-1">Editar</a>
                       <a href="#" class="btn btn-success mr-1">Ver</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

            </div>
        </div>
    </div>
</x-app-layout>


