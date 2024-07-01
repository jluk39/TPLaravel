@extends('admin.layouts.app')

@section('content')
    <div class="row mb-5">
        <div class="col-12">
            <div class="jumbotron text-center custom-jumbotron">
                <h1 class="display-4">Categoría {{ $type->name }}</h1>
                <p class="lead">SugarPop! tu mejor negocio de dulces</p>
                <hr class="my-4">
                <p>Descubrí las mejores golosinas de este tipo.</p>
                <div class="text-start">
                    <a class="btn btn-primary btn-lg" href="{{ route('web.candies.index') }}" role="button">
                        <i class="fas fa-arrow-left"></i> Volver a Inicio
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if($candies->isEmpty())
            <div class="col-12">
                <div class="alert alert-warning text-center" role="alert">
                    Lo sentimos, en este momento no hay productos disponibles en esta categoría.
                </div>
            </div>
        @else
            @foreach($candies as $candie)
                <div id="productos" class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="/storage/{{ $candie?->image?->src }}" class="card-img-top" alt="{{ $candie->name }}" style="width: 200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $candie->name }}</h5>
                            <p class="card-text card-description">{{ $candie->description }}</p>
                            <p class="card-text card-price"><strong>${{ number_format($candie->price, 2, ',', '.') }}</strong></p>
                            <a href="{{ route('web.candies.candy', $candie->id) }}" class="btn btn-comprar btn-primary"><i class="fas fa-shopping-basket"></i> Más Info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div class="d-flex justify-content-center">
        {{ $candies->links() }}
    </div>
@endsection
