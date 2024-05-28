<!DOCTYPE html>
<html lang="es">
    @include('admin.partials.head')

    <body>

        @include('admin.partials.nav')
        
        <div class="container mt-5">
            <div class="row mb-3">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h1>Listado de Golosinas</h1>
                    <a href="/admin/candies/create" class="btn btn-success"><i class="fas fa-plus"></i> Agregar Golosina</a>
                </div>
            </div>

            <div class="row">  
                <div class="col-12 my-5">
                    <table class="table table-stripped table-bordered">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($candies as $candie)
                                <tr>
                                    <td><img src="{{ $candie->image_url }}" alt="{{ $candie->name }}" class="img-thumbnail" style="width: 100px;"></td>
                                    <td>{{ $candie->name }}</td>
                                    <td>{{ $candie->description }}</td>
                                    <td>{{ $candie->category }}</td>
                                    <td>${{ number_format($candie->price, 2, ',', '.') }}</td>
                                    <td>
                                        <a href="/admin/candies/{{ $candie-> id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                                        <form action="/admin/candies/{{ $candie->id }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        @include('admin.partials.footer')

    </body>
</html>
