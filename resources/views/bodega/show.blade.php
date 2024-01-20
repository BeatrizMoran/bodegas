@extends("layouts.app")

@section("title", "crearBodega")

@section("content")
    <div class="container">
    <h1 class="my-4">Crear Bodega</h1>

    <a href="{{ route('bodegas.edit', ['bodega' => $bodega,'edit' => true]) }}" class="btn btn-primary mb-3">Editar</a>
    <a href="{{ route('bodegas.index')}}" class="btn btn-secondary mb-3">Volver</a>
    <form action=" {{ route('bodegas.destroy', $bodega) }} " method="POST">
        @csrf 
        @method("DELETE")
        <input type="submit" class="btn btn-danger btn-sm" value="ELIMINAR">
    </form>

        <form action="{{ route('bodega.update', $bodega) }}" method="POST">
            @method("PUT")
            @csrf <!-- Esto es para protección contra CSRF en Laravel, asegúrate de incluirlo si estás usando Laravel -->

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $bodega->nombre }}" class="form-control" {{ isset($edit) && $edit ? 'required' : 'disabled' }}>
            </div>

            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicación:</label>
                <input type="text" id="ubicacion" name="ubicacion" value="{{ $bodega->ubicacion }}" class="form-control" {{ isset($edit) && $edit ? 'required' : 'disabled' }}>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" value="{{ $bodega->telefono }}" class="form-control" {{ isset($edit) && $edit ? 'required' : 'disabled' }}>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" value="{{ $bodega->email }}" class="form-control" {{ isset($edit) && $edit ? 'required' : 'disabled' }}>
            </div>

            <div class="mb-3">
                <label for="personaContacto" class="form-label">Persona de Contacto:</label>
                <input type="text" id="personaContacto" name="personaContacto" value="{{ $bodega->personaContacto }}" class="form-control" {{ isset($edit) && $edit ? 'required' : 'disabled' }}>
            </div>

            <div class="mb-3">
                <label for="anyoFundacion" class="form-label">Año de Fundación:</label>
                <input type="number" id="anyoFundacion" name="anyoFundacion" value="{{ $bodega->anyoFundacion }}" class="form-control" {{ isset($edit) && $edit ? 'required' : 'disabled' }}>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="form-control" {{ isset($edit) && $edit ? 'required' : 'disabled' }}>{{ $bodega->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Restaurante:</label>
                <div class="form-check">
                    <input type="radio" value="1" name="restaurante" class="form-check-input" {{ isset($edit) && $edit ? 'required' : 'disabled' }} {{ $bodega->restaurante == 1 ? 'checked' : '' }}>
                    <label class="form-check-label">Si</label>
                </div>
                <div class="form-check">
                    <input type="radio" value="0" name="restaurante" class="form-check-input" {{ isset($edit) && $edit ? 'required' : 'disabled' }} {{ $bodega->restaurante == 0 ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Hotel:</label>
                <div class="form-check">
                    <input type="radio" value="1" name="hotel" class="form-check-input" {{ isset($edit) && $edit ? 'required' : 'disabled' }} {{ $bodega->hotel == 1 ? 'checked' : '' }}>
                    <label class="form-check-label">Si</label>
                </div>
                <div class="form-check">
                    <input type="radio" value="0" name="hotel" class="form-check-input" {{ isset($edit) && $edit ? 'required' : 'disabled' }} {{ $bodega->hotel == 0 ? 'checked' : '' }}>
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <input type="{{ isset($edit) && $edit ? 'submit' : 'hidden' }}" class="btn btn-primary" value="Actualizar Bodega" {{ isset($edit) && $edit ? 'required' : 'disabled' }}>
        </form>

        <a href="{{ route('bodega.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>

    <div class="vinos">

    </div>
@endsection
