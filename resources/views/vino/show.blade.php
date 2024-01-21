@extends("layouts.app")

@section("title", "Crear Vino")

@section("content")

@if($errors->any())
    <div class="alert alert-danger mt-4">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container mt-4">
    <h2 class="mb-4">Detalles Vino</h2>
    <a href="{{ route('vinos.edit', $vino) }}" class="btn btn-primary mb-2">Editar</a>
    <a href="{{ route('bodegas.vinos.show', $vino->bodega_id) }}" class="btn btn-secondary mb-2">Volver</a>

    <form action="{{ route('vinos.destroy', $vino)}}" method="post" style="display: inline;">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger mb-2">Eliminar</button>
    </form>

    <form action="{{ route('vinos.update', $vino) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $vino->nombre }}" {{ $edit ? "required" : "disabled" }}>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" {{ $edit ? "required" : "disabled" }}>{{ $vino->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="anyo">Año:</label>
            <input type="number" name="anyo" class="form-control" value="{{ $vino->anyo }}" {{ $edit ? "required" : "disabled" }}>
        </div>

        <div class="form-group">
            <label for="alcohol">Alcohol:</label>
            <input type="number" step="0.01" name="alcohol" class="form-control" value="{{ $vino->alcohol }}" {{ $edit ? "required" : "disabled" }}>
        </div>

        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo" class="form-control" value="{{ $vino->tipo }}" {{ $edit ? "required" : "disabled" }}>
        </div>

        <input type="hidden" name="bodega_id" value="{{ $vino->bodega_id}}">


        <input type="{{ $edit ? 'submit' : 'hidden' }}" class="btn btn-success mb-3" value="Actualizar Vino">
    </form>
</div>

@endsection
