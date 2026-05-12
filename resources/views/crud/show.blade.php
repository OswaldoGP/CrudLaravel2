@extends("layouts.main")

@section("contenido")
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Detalles del producto a eliminar </h2>
                <h4>Una vez eliminado no se podrá recuperar</h4>
                <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
                <p><strong>Precio:</strong> {{ $producto->precio }}</p>
                <p><strong>Stock:</strong> {{ $producto->stock }}</p>
                <hr>
                <form action="{{ route("producto.destroy", $producto->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
                <a href="{{ route("producto.index") }}" class="btn btn-info">Regresar</a>
            </div>
        </div>
    </div>
@endsection