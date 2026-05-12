@extends("layouts.main");

@section("contenido")
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Crear nuevo producto</h2>
                @method("post")
                <form action="{{ route("producto.store") }}" method="post">
                    @csrf
                    @method("post")
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"  required>
                    </div>
                    <div class="form-group"> 
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control"  required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar producto</button>
                    <a href="{{ route("producto.index") }}" class="btn btn-info mt-1">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection