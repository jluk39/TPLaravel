@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center">Editar Golosina</h1>
            
            <form action="/admin/candies/{{ $candie->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group mb-4">
                    <label for="name">Nombre</label>
                    <input value="{{ $candie->name }}" type="text" class="form-control" id="name" name="name" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $candie->description }}</textarea>
                </div>
                
                <div class="form-group mb-4">
                    <label for="type_id">Categoría</label>
                    <select class="form-control" id="type_id" name="type_id" required>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}" {{ $type->id == $candie->type_id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group mb-4">
                    <label for="price">Precio</label>
                    <input value="{{ $candie->price }}" type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
                
                <div class="form-group mb-4">
                    <label for="image">Imagen</label>
                    <div class="d-flex align-items-center">
                        <input type="file" class="form-control me-3" id="image" name="image">
                        @if($candie->image)
                            <div class="border p-2">
                                <img src="{{ asset('storage/' . $candie->image->src) }}" alt="{{ $candie->name }}" width="150">
                            </div>
                        @endif
                    </div>
                </div>
                
                <div class="form-group form-check mb-4">
                    <input type="checkbox" class="form-check-input" id="is_visible" name="is_visible" {{ $candie->is_visible ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_visible">Visible</label>
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
            </form>
        </div>
    </div>
@endsection