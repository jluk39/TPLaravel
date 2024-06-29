@extends('admin.layouts.app')

@section('content')
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
                    <label for="type_id">Categoría</label>
                    <input type="number" class="form-control" id="type_id" name="type_id" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="price">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="image">Imagen</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                
                <div class="form-group form-check mb-4">
                    <input type="checkbox" class="form-check-input" id="is_visible" name="is_visible" checked>
                    <label class="form-check-label" for="is_visible">Visible</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
@endsection