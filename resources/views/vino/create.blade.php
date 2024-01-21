@extends("layouts.app")

@section("title", "Crear Vino")

@section("content")

@if($errors->any())
<ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

</ul>
@endif
    <div class="container">
        <h2 class="mt-4 mb-4">Crear Vino</h2>
        <form action="{{ route('vinos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="anyo">Año:</label>
                <input type="number" name="anyo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alcohol">Alcohol:</label>
                <input type="number" step="0.01" name="alcohol" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-success mb-3">Crear Vino</button>
        </form>
    </div>
@endsection
