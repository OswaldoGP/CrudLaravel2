@extends("layouts.main")

@section("contenido")
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Actualizar producto</h2>
                @method("put")
                <form action="{{ route("producto.update", $producto->id) }}" method="post">
                    @csrf
                    @method("put")
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                    </div>
                    <div class="form-group"> 
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control" value="{{ $producto->stock }}" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Actualizar producto</button>
                    <a href="{{ route("producto.index") }}" class="btn btn-info mt-1">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection