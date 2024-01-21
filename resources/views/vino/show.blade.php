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
        <h2 class="mt-4 mb-4">Detalles Vino</h2>
        <a href="{{ route('vinos.edit', $vino) }}">Editar</a>
        <a href="{{ route('bodegas.vinos.show', $vino->bodega_id) }}">Volver</a>
        <form action="{{ route('vinos.destroy', $vino)}}" method="post">
            @csrf
            @method("DELETE")
            <input type="submit" value="Eliminar">
        </form>
        <form action="{{ route('vinos.update', $vino) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{$vino->nombre}}" {{$edit == true ? "required" : "disabled" }}>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control"  {{$edit == true ? "required" : "disabled" }}>{{ $vino->descripcion}}</textarea>
            </div>

            <div class="form-group">
                <label for="anyo">Año:</label>
                <input type="number" name="anyo" class="form-control" value="{{ $vino->anyo }}" {{$edit == true ? "required" : "disabled" }}>
            </div>

            <div class="form-group">
                <label for="alcohol">Alcohol:</label>
                <input type="number" step="0.01" name="alcohol" class="form-control" value="{{ $vino->alcohol }}" {{$edit == true ? "required" : "disabled" }}>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" class="form-control" value="{{ $vino->tipo }}" {{$edit == true ? "required" : "disabled" }}>
            </div>

            <input type="hidden" name="bodega_id" value="{{ $vino->bodega_id}}">

            <input type="{{$edit == true ? 'submit' : 'hidden' }}" class="btn btn-primary" value="Actualizar Vino">
        </form>
    </div>
@endsection
