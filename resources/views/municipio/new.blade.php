@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Municipio</h1>
    <form action="{{ route('municipios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="muni_nomb" class="form-label">Nombre del Municipio</label>
            <input type="text" class="form-control" id="muni_nomb" name="muni_nomb" required>
        </div>
        <div class="mb-3">
            <label for="depa_codi" class="form-label">Departamento</label>
            <select class="form-control" id="depa_codi" name="depa_codi" required>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('municipios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
