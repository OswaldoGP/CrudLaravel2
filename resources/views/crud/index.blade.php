@extends("layouts.main")

@section("contenido")
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h1>Mi crud de productos con laravel 13</h1>

                    @if (session('succes'))
                        <div class="alert alert-success">
                            {{ session('succes') }}
                        </div>
                    @endif

                    <hr>
                    <a href="{{ route("producto.create") }}" class="btn btn-primary">agregar nuevo producto</a>
                    
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->precio }}</td>
                                <td>{{ $item->stock }}</td>
                                <td>
                                    <a href="{{ route("producto.edit", $item->id) }}" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <a href="{{ route("producto.show", $item->id) }}" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $productos->links() }}
                </div>
            </div>
        </div>
@endsection