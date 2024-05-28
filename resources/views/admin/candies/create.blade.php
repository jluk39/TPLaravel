<!DOCTYPE html>
<html lang="es">
    @include('admin.partials.head')

    <body>
        @include('admin.partials.nav')

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">Agregar Golosina</h1>
                    
                    <form action="/admin/candies" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group mb-4">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="category">Categoría</label>
                            <input type="text" class="form-control" id="category" name="category" required>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="price">Precio</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="image_url">URL de la Imagen</label>
                            <input type="text" class="form-control" id="image_url" name="image_url">
                        </div>
                        
                        <div class="form-group form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="is_visible" name="is_visible" checked>
                            <label class="form-check-label" for="is_visible">Visible</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>

        @include('admin.partials.footer')
    </body>
</html>

