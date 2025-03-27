<div class="container">
    <h1>Edit Department</h1>
    <form method="POST" action="{{ route('departamentos.update', ['departamento' => $departamento->depa_codi]) }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Id</label>
            <input type="text" class="form-control" id="id" name="id"
                disabled="disabled" value="{{ $departamento->depa_codi }}">
            <div id="codigoHelp" class="form-text">Department Id.</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Department</label>
            <input type="text" required class="form-control" id="name" placeholder="Department name"
                name="name" value="{{ $departamento->depa_nomb }}">
        </div>

        <label for="country">Country:</label>
        <select class="form-select" id="country" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($paises as $pais)
                @if ($pais->pais_codi == $departamento->pais_codi)
                    <option selected value="{{ $pais->pais_codi }}">{{ $pais->pais_nomb }}</option>
                @else
                    <option value="{{ $pais->pais_codi }}">{{ $pais->pais_nomb }}</option>
                @endif
            @endforeach
        </select>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('departamentos.index') }}" class="btn btn-warning">Cancel</a>
        </div>
    </form>
</div>
