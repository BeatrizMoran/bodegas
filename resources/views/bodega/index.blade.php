@extends("layouts.app")

@section("title", "Bodegas")

@section("content")
    <div class="container">
        <h1 class="my-4">Listado de bodegas</h1>
        <a href="{{ route('bodegas.create') }}" class="btn btn-success mb-3">Añadir bodega</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Localización</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bodegas as $bodega)
                <tr>
                    <td>{{ $bodega->nombre }}</td>
                    <td>{{ $bodega->ubicacion }}</td>
                    <td>{{ $bodega->telefono }}</td>
                    <td>{{ $bodega->email }}</td>
                    <td>
                        <a href="{{ route('bodegas.vinos.show', $bodega) }}"class="btn btn-primary btn-sm">Entrar</a>
                        <form action=" {{ route('bodegas.destroy', $bodega) }} " method="POST" style="display: inline;">
                            @csrf 
                            @method("DELETE")
                            <input type="submit" class="btn btn-danger btn-sm" value="ELIMINAR">
                        </form>
                        
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No hay bodegas</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
