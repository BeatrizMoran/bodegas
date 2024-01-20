@extends("layouts.app")

@section("title", "crearBodega")

@section("content")
    <div class="container mt-5">
        <h1 class="mb-4">Crear Bodega</h1>

        <form action="{{ route('bodegas.store') }}" method="POST">

            @csrf <!-- Esto es para protección contra CSRF en Laravel, asegúrate de incluirlo si estás usando Laravel -->

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicación:</label>
                <input type="text" id="ubicacion" name="ubicacion"  class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" required>
                @error('telefono')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="personaContacto" class="form-label">Persona de Contacto:</label>
                <input type="text" id="personaContacto" name="personaContacto"  class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="anyoFundacion" class="form-label">Año de Fundación:</label>
                <input type="number" id="anyoFundacion" name="anyoFundacion"  class="form-control" required>
                @error('anyoFundacion')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-check-label">Restaurante:</label>
                <div class="form-check">
                    <input type="radio" value="1" name="restaurante" class="form-check-input" required>
                    <label class="form-check-label">Si</label>
                </div>
                <div class="form-check">
                    <input type="radio" value="0" name="restaurante" class="form-check-input" required >
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-check-label">Hotel:</label>
                <div class="form-check">
                    <input type="radio" value="1" name="hotel" class="form-check-input" required >
                    <label class="form-check-label">Si</label>
                </div>
                <div class="form-check">
                    <input type="radio" value="0" name="hotel" class="form-check-input" required >
                    <label class="form-check-label">No</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" required>Crear Bodega</button>
        </form>

        <a href="{{ route('bodegas.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
@endsection
