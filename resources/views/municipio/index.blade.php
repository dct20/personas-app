@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Municipios</h1>
    <a href="{{ route('municipios.create') }}" class="btn btn-success mb-3">Agregar Municipio</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($municipios as $municipio)
                <tr>
                    <td>{{ $municipio->muni_codi }}</td>
                    <td>{{ $municipio->muni_nomb }}</td>
                    <td>{{ $municipio->departamento->depa_nomb }}</td>
                    <td>
                        <a href="{{ route('municipios.edit', $municipio->muni_codi) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('municipios.destroy', $municipio->muni_codi) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
